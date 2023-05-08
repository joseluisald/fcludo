<?php

namespace Source\Support;

use Source\Models\ImageModel;

/**
 * Class UploadImage
 * @package Source\Support
 */
class UploadImage
{
    /**
     * @var String
     */
    private $table_name;
    /**
     * @var Int
     */
    private $table_id;
    /**
     * @var array
     */
    private $postFile;
    /**
     * @var array
     */
    private $image_id;
     /**
     * @var array
     */
    private $imageModel;


    /**
     * UploadImage constructor.
     * @param String $table_name
     * @param Int $table_id
     * @param array $postFile
     */
    public function __construct(String $table_name, Int $table_id, ?Array $postFile = [], $image_id = '')
    {
        $this->table_name = $table_name;
        $this->table_id = $table_id;
        $this->postFile = $postFile;
        $this->image_id = $image_id;
        $this->imageModel = new ImageModel();
    }

    /**
     * @return array
     */
    public function upload()
    {
        if (!empty($this->table_name) && !empty($this->table_id) && !empty($this->postFile['image']['name'])) {
            $imageUploader = new \CoffeeCode\Uploader\Image("uploads", $this->table_name, 600);
            $imageName = uniqid() . '_' . strtotime("now") . '_' . uniqid();
            $saveImg = '';

            try {
                $upload = $imageUploader->upload($this->postFile['image'], $imageName);
                $file = $upload;

                if(!empty($this->image_id))
                {
                    $editImg = $this->imageModel->findById($this->image_id);
                    $editImg->image = $upload;
                    $saveImg = $editImg->save();

                    if ($this->imageModel->fail()) {
                        $saveImg = $this->imageModel->fail()->getMessage();
                    }
                }
                else
                {
                    $this->imageModel->table_name = $this->table_name;
                    $this->imageModel->table_id = $this->table_id;
                    $this->imageModel->image = $upload;
                    $saveImg = $this->imageModel->save();

                    if ($this->imageModel->fail()) {
                        $saveImg = $this->imageModel->fail()->getMessage();
                    }
                }
            } catch (\Exception $e) {
                $file = $e->getMessage();
            }

            return ['file' => $file, 'saveImg' => $saveImg, 'postFile' => $this->postFile];
        } else {
            return ['file' => false, 'saveImg' => false, 'postFile' => $this->postFile];;
        }
    }

    /**
     * @return array
     */
    public function delete()
    {
        $deleteImgs = $this->imageModel->find("table_name = :table_name AND table_id = :table_id", "table_name={$this->table_name}&table_id={$this->table_id}")->fetch(true);

        $return = array();
        $statusUnlink = 0;
        $statusUnlinkError = 0;
        $statusDestroy = 0;
        $statusDestroyError = 0;

        if($deleteImgs)
        {
            foreach($deleteImgs as $image)
            {
                if(file_exists($image->image))
                {
                    if(unlink($image->image)) $statusUnlink++; else $statusUnlinkError++;
                }
                if($image->destroy()) $statusDestroy++; else $statusDestroyError++;
            }
        }

        if($statusUnlinkError == 0) $return['unlink'] = true; else $return['unlink'] = false;
        if($statusDestroyError == 0) $return['destroy'] = true; else $return['destroy'] = false;

        return $return;
    }
}