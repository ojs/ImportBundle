<?php

namespace Ojs\ImportBundle\Helper;

class FileHelper {
    public static $mimeToExtMap = [
        'application/pdf'    => 'pdf',
        'image/jpeg'         => 'jpg',
        'application/msword' => 'doc',
        'application/zip'    => 'zip',
        'application/octet-stream' => 'bin',
        'application/text-plain:formatted' => 'txt',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx'
    ];
}
