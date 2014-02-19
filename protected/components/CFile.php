<?php

class CFileException extends Exception {}

class CFile extends CApplicationComponent {

    public $patch;
    public $_exists;

    public function getExists($patch) {

        $this->patch = $patch;

        $this->addLog('Filesystem object availability test: ' . $patch, 'trace');

        if (file_exists($patch)) {
            $this->_exists = True; 
        } else {
            $this->_exists = False;
        }

        if ($this->_exists) {
            return True;
        }

        $this->addLog('Filesystem object not found');
        return False;
    }

    protected function addLog($message, $level='info') {
        Yii::log($message.' (obj: ' . $this->patch . ')', $level, 'ext.file');
    }
}
