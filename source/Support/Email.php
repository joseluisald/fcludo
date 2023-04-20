<?php

namespace Source\Support;

use Exception;
use stdClass;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * Class Email
 * @package Source\Support
 */
class Email
{
//    use \EmailConfig;

    /** @var PHPMailer */
    private $mail;

    /** @var stdClass */
    private $data;

    /** @var Exception */
    private $error;

    /**
     * Email constructor.
     */
    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->data = new stdClass();

        $this->mail->isSMTP();
        $this->mail->isHTML(true);
        $this->mail->setLanguage("br");

        $this->mail->SMTPAuth   = true;
        $this->mail->SMTPSecure = "tls";
        $this->mail->CharSet    = "utf-8";

//        $this->mail->Host       = self::HOST;
//        $this->mail->Username   = self::USER;
//        $this->mail->Password   = self::PASSWD;
//        $this->mail->Port       = self::PORT;

        $this->mail->Host       = MAIL_CONFIG["host"];
        $this->mail->Username   = MAIL_CONFIG["user"];
        $this->mail->Password   = MAIL_CONFIG["passwd"];
        $this->mail->Port       = MAIL_CONFIG["port"];
    }

    /**
     * @param string $subject
     * @param string $body
     * @param string $recipient_name
     * @param string $recipient_email
     * @return Email
     */
    public function add(string $subject, string $body, string $recipient_name, string $recipient_email): Email
    {
        $this->data->subject = $subject;
        $this->data->body = html_entity_decode($body);
        $this->data->recipient_name = $recipient_name;
        $this->data->recipient_email = $recipient_email;
        return $this;
    }

    /**
     * @param string $filePath
     * @param string $fileName
     * @return Email
     */
    public function attach(string $filePath, string $fileName): Email
    {
        $this->data->attach[$filePath] = $fileName;
        return $this;
    }

    /**
     * @param string $from_name
     * @param string $from_email
     * @return bool
     */
    public function send(string $from_name = MAIL_CONFIG["from_name"], string $from_email = MAIL_CONFIG["from_email"]): bool
    {
        try
        {
            $this->mail->Subject = $this->data->subject;
            $this->mail->msgHTML($this->data->body);
            $this->mail->addAddress($this->data->recipient_email, $this->data->recipient_name);
            $this->mail->setFrom($from_email, $from_name);

            if(!empty($this->data->attach))
            {
                foreach($this->data->attach as $path => $name)
                {
                    $this->mail->addAttachment($path, $name);
                }
            }

            $this->mail->send();
            return true;
        }
        catch (Exception $exception)
        {
            $this->error = $exception;
            return false;
        }
    }

    /**
     * @return Exception|null
     */
    public function error(): ?Exception
    {
        return $this->error;
    }
}