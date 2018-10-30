<?php
//配置文件
return [
    /* 七牛上传下载 */
    'UPLOAD_FILE_QINIU'     => array (
        'driver'            => 'Qiniu',//七牛驱动
        'driverConfig'      => array (
            'secretKey'         => '7BT5cPy9SyX23yClaCgURvqlYdmp5eT_9d6fhPuL',
            'accessKey'         => 'p53TdxExussF8VFd2b1cL7JXZz4tVd5sVmuR8xyF',
            'domain'            => 'pc5hsiop1.bkt.clouddn.com',
            'bucket'            => 'guoji-cloud',
        )
    ),
];