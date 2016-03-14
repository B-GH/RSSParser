<?php

/**
 * Class RSSItem
 *
 * @author Badr EL Ghailani / bgh.code@gmail.com
 */
class RSSItem
{

    /**
     * title
     *
     * @var string
     */
    protected $title;

    /**
     * link
     *
     * @var string
     */
    protected $link;

    /**
     * description
     *
     * @var string
     */
    protected $description;

    /**
     * getTitle
     *
     * @return string title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * setTitle
     *
     * @param string $title
     * @return RSSItem
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * getLink
     *
     * @return string link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * setLink
     *
     * @param string $link
     * @return RSSItem
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * getDescription
     *
     * @return string description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * setDescription
     * @param string $desc
     * @return RSSItem
     */
    public function setDescription($desc)
    {
        $this->description = $desc;
        return $this;
    }

    /**
     * toArray
     *
     * @return array item
     */
    public function toArray()
    {
        return array(
            'title' => $this->getTitle(),
            'link' => $this->getLink(),
            'description' => $this->getDescription(),
        );
    }

}

