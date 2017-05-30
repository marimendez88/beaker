<?php
/**
 * Created by PhpStorm.
 * User: christopher
 * Date: 8/26/16
 * Time: 10:43 AM
 */

namespace Beaker\AppBundle\Classes;


class Image
{
    private $dirname;
    private $file;
    private $path;
    private $realPath;

    public function __construct($dirname)
    {
        $this->dirname = $dirname;
    }

    public function preUpload($file, $path, $realPath, $dirname) {

        $this->file = $file;
        $this->path = $path;
        $this->realPath = $realPath;
        $this->dirname = $dirname;

        if (null !== $file) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename . '.' . $file->guessExtension();
            $this->realPath = '/'. $this->getUploadDir() .'/'. $this->path;
        }

        return array('path' => $this->path, 'realPath' => $this->realPath);

    }


    public function upload($file, $path) {

        if (null === $file) {
            return;
        }


        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error

        $file->move($this->getUploadRootDir(), $path);




        // check if we have an old image
        if (isset($this->tempPath)) {
            if ($this->tempPath != 'initial' || $this->tempPath != '') {
                // delete the old image
//                unlink($this->getUploadRootDir() . '/' . $this->tempPath);
            }
            // clear the temp image path
            $this->tempPath = null;
        }

        $this->file = null;

    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/CMS/'. $this->dirname;
    }

    protected function getUploadRootDir() {
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    /**
     * @return mixed
     */
    public function getDirname()
    {
        return $this->dirname;
    }

    /**
     * @param mixed $dirname
     */
    public function setDirname($dirname)
    {
        $this->dirname = $dirname;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getRealPath()
    {
        return $this->realPath;
    }

    /**
     * @param mixed $realPath
     */
    public function setRealPath($realPath)
    {
        $this->realPath = $realPath;
    }
}