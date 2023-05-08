<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Source\Support\UploadImage;

/**
 * Class ProjectModel
 * @package Source\Models
 */
class ProjectModel extends DataLayer
{
    /**
     * ProjectModel constructor.
     */
    public function __construct()
    {
        parent::__construct("projects", ["title", "description", "goal"]);
    }

    public function getProjects()
    {
        return $this->find()->fetch(true);
    }

    /**
     * @param $postData
     * @param $postFile
     * @return mixed
     */
    public function addProject($postData, $postFile)
    {
        $this->title = $postData['title'];
        $this->sub_title = $postData['sub_title'];
        $this->description = $postData['description'];
        $this->goal = $postData['goal'];
        $this->goal_date = $postData['goal_date'];
        $this->reached = $postData['reached'];
        $this->campaign_type = $postData['campaign_type'];
        $status = $this->save();

        $return = array();
        if($status)
        {
            if(isset($postFile) && !empty($postFile['image']['name'])) {
                $uploadImage = new UploadImage('projects', $this->data()->id, $postFile);
                $s = $uploadImage->upload();

                $return['file'] =$s['file'];
                $return['saveImg'] = $s['saveImg'];
                $return['postFile'] = $s['postFile'];
            }

            $return['data'] = $this->data();
            $return['status'] = $status;
        }
        else
        {
            $return['status'] = $this->fail()->getMessage();
        }
        return $return;
    }

    /**
     * @param int $id
     * @return DataLayer|null
     */
    public function getProjectsById(int $id)
    {
        $images = (new Image())->find("table_name = :table_name AND table_id = :table_id", "table_name=projects&table_id={$id}")->fetch();
        return ['project' => $this->findById($id), 'images' => $images];
    }
}