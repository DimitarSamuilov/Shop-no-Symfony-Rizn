<?php
/**
 * Created by PhpStorm.
 * User: Arch
 * Date: 5.3.2017 г.
 * Time: 19:26 ч.
 */

namespace Config;


class FileUploadConfig
{
    const IMAGES=[IMAGETYPE_PNG,IMAGETYPE_JPEG];
    const IMAGE_DIR="Content".DIRECTORY_SEPARATOR."Images".DIRECTORY_SEPARATOR;
}