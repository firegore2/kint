<?php

class Kint_Renderer_Rich_DepthLimit extends Kint_Renderer_Rich_Plugin
{
    public function render($o)
    {
        return '<dl>'.$this->renderLockedHeader($o, '<var>Depth Limit</var>').'</dl>';
    }
}
