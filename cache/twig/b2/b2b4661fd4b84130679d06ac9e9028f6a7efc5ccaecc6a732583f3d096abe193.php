<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:C:\xampp\htdocs\BaitAlZakhrafaDecor\user\plugins\error/pages */
class __TwigTemplate_cc64ec5e99af1ead2c155cd3e401c82e9c6b0e61e71969ff9ee7269ab6af5823 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ERROR.ERROR_MESSAGE"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:C:\\xampp\\htdocs\\BaitAlZakhrafaDecor\\user\\plugins\\error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

", "@Page:C:\\xampp\\htdocs\\BaitAlZakhrafaDecor\\user\\plugins\\error/pages", "");
    }
}
