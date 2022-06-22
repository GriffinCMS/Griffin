<?php

class errorReporter
{
    public $debugMode = false;
    public $logger = array();

    public function __construct() {
        if (file_exists('../../DEBUGMODE'))
            $this->debugMode = true;

        //set_error_handler( array($this, "logError" ));
        //set_exception_handler( array($this, "logException" ));

        if (!empty($this->logger)) var_dump ($this->logger);
    }

    public function logError($num, $str, $file, $line) {
        $this->logger[] = [
            'type' => 'error',
            'message' => array(
                'num' => $num,
                'str' => $str,
                'file' => $file,
                'line' => $line,
            ),
        ];
    }

    public function logException($e) {
        $this->logger[] = [
            'type' => 'exception',
            'message' => $e,
        ];
    }
}