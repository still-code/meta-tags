<?php

namespace MetaTag;

class MetaTag
{
    public $title;
    public $desc;
    public $type;
    public $url;
    public $image;
    public $color;

    /**
     * @param $title
     * @return $this
     */
    public function title($title): MetaTag
    {
        $this->title = "<title>{$title}</title>";
        $this->title .= "<meta name=\"title\" content=\"{$title}\">";
        $this->title .= "<meta property=\"og:title\" content=\"{$title}\">";
        $this->title .= "<meta property=\"twitter:title\" content=\"{$title}\">";

        return $this;
    }

    /**
     * @param $desc
     * @return $this
     */
    public function desc($desc)
    {
        $this->desc .= "<meta name=\"description\" content=\"{$desc}\">";
        $this->desc .= "<meta property=\"og:description\" content=\"{$desc}\">";
        $this->desc .= "<meta property=\"twitter:description\" content=\"{$desc}\">";

        return $this;
    }

    /**
     * @param  string  $type
     * @return $this
     */
    public function type(string $type = 'website')
    {
        $this->type .= "<meta name=\"og:type\" content=\"{$type}\">";

        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function url($url)
    {
        $this->url .= "<meta name=\"og:url\" content=\"{$url}\">";

        return $this;
    }

    /**
     * @param $image
     * @return $this
     */
    public function image($image)
    {
        $this->image .= "<meta name=\"og:image\" content=\"{$image}\">";

        $this->image .= '<meta name="twitter:card" content="summary_large_image">';
        $this->image .= "<meta name=\"twitter:image\" content=\"{$image}\">";

        return $this;
    }

    /**
     * @param $color
     * @return $this
     */
    public function color($color)
    {
        $this->color .= "<meta name=\"theme-color\" content=\"{$color}\">";

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $props = (new \ReflectionClass($this))->getProperties(\ReflectionProperty::IS_PUBLIC);
        $return = '';
        foreach ($props as $prop) {
            $return .= $this->{$prop->name};
        }

        return $return;
    }
}
