<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * DesktopVideo
 * @Vich\Uploadable
 */
class DesktopVideo
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;
    
    /**
     * Set title
     *
     * @param string $title
     * @return DesktopVideo
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return DesktopVideo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="video_file", fileNameProperty="videoName")
     *
     * @var File
     */
    private $videoFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $videoName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Product
     */
    public function setImageFile(File $image = null)
    {
        $this->videoFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->videoFile;
    }

    /**
     * @param string $videoName
     *
     * @return Product
     */
    public function setImageName($videoName)
    {
        $this->videoName = $videoName;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->videoName;
    }

    /**
     * Set videoFile
     *
     * @param string $videoFile
     * @return DesktopVideo
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;

        return $this;
    }

    /**
     * Get videoFile
     *
     * @return string 
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Set videoName
     *
     * @param string $videoName
     * @return DesktopVideo
     */
    public function setVideoName($videoName)
    {
        $this->videoName = $videoName;

        return $this;
    }

    /**
     * Get videoName
     *
     * @return string 
     */
    public function getVideoName()
    {
        return $this->videoName;
    }
    /**
     * @var \EntityBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \EntityBundle\Entity\User $user
     * @return DesktopVideo
     */
    public function setUser(\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EntityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var string
     * 
     * @Vich\UploadableField(mapping="preview_file", fileNameProperty="previewImageName ")
     */
    private $previewFile;

    /**
     * @var string
     */
    private $previewImageName;


    /**
     * Set previewFile
     *
     * @param string $previewFile
     * @return DesktopVideo
     */
    public function setPreviewFile($previewFile)
    {
        $this->previewFile = $previewFile;

        return $this;
    }

    /**
     * Get previewFile
     *
     * @return string 
     */
    public function getPreviewFile()
    {
        return $this->previewFile;
    }

    /**
     * Set previewImageName
     *
     * @param string $previewImageName
     * @return DesktopVideo
     */
    public function setPreviewImageName($previewImageName)
    {
        $this->previewImageName = $previewImageName;

        return $this;
    }

    /**
     * Get previewImageName
     *
     * @return string 
     */
    public function getPreviewImageName()
    {
        return $this->previewImageName;
    }
}
