<?php


class TitleDisplay
{
    public $titleText = "Title Goes Here";
    public $subtitleText = "Subtitle Goes Here";

    public function Display(){
        echo
            '<div class="titleDisplayTitle">
                <h1>' . $this->titleText .  '</h1>
            </div>
            <div class="titleDisplaySubtitle"
                <h5>' . $this->subtitleText . '</h5>
            </div>';
    }

    /**
     * @return string
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * @param string $titleText
     */
    public function setTitleText($titleText)
    {
        $this->titleText = $titleText;
    }

    /**
     * @return string
     */
    public function getSubtitleText()
    {
        return $this->subtitleText;
    }

    /**
     * @param string $subtitleText
     */
    public function setSubtitleText($subtitleText)
    {
        $this->subtitleText = $subtitleText;
    }
}

//<div class="container focusBackgroundColor stretchToEnd">