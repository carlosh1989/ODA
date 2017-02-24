<?php
namespace System\tools\session;
/**
 * Class Flash_Messages
 */
class Message
{
    /**
     * construct session
     */
    public function __construct()
    {
        // create the session array if it doesn't already exist
        if(!isset($_SESSION['flash_message']))
        {
            $_SESSION['flash_message'] = array(
                'type' => null,
                'title' => null,
                'message' => null
            );
        }
    }

    /**
     * save flash message to session
     * @param $type
     * @param $message
     */
    public static function add($type,$title, $message)
    {
        $_SESSION['flash_message'] = array(
            'type' => $type,
            'title' => $title,
            'message' => $message
        );
    }

    /**
     * recall flash message from session and display
     * @return string
     */
    public static function show()
    {
        if(!is_null($_SESSION['flash_message']['type']))
        {
            $type = $_SESSION['flash_message']['type'];
            $title = $_SESSION['flash_message']['title'];
            $message = $_SESSION['flash_message']['message'];
            unset($_SESSION['flash_message']); // unset flash_message key

            return "<script>swal('".$title."','".$message."','".$type."');</script>";
        } else {
            return false;
        }
    }

    public static function hasMessages()
    {
        if(!isset($_SESSION['flash_message']))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}