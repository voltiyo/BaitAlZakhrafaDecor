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

/* ./partials/navbar.html.twig */
class __TwigTemplate_ea8dd39c1e6b74176d3af315e38d5c3479dc48cf4bd0c7342b4dc804fb271d4e extends \Twig\Template
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
        echo "<header class=\"py-2 w-full text-white relative\">
    <div class=\"flex flex-col md:flex-row items-center md:items-end justify-between\">
        <div class=\"md:pr-10\">
        ";
        // line 4
        $context["home"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/home"], "method");
        // line 5
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["home"] ?? null), "url", []), "html", null, true);
        echo "\">
                <img class=\"h-20 lg:h-20 xl:h-32  w-auto\" src=\"https://buzzboxz.com/assets/logo.png\" alt=\"\"/>
            </a>
        </div>
        <ul class=\"flex items-center flex-wrap justify-center sm:justify-end\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 11
            echo "                <li>
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", []), "html", null, true);
            echo "\"
                        class=\" uppercase text-lg xl:text-[1.35rem] text-gray hover:font-semibold px-3 xl:px-7 \">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", []), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        </ul>
    </div>
    <div class=\"md:-mt-1 md:ml-[61px] border-b-2 border-gray h-1 z-10\"></div>
</header>";
    }

    public function getTemplateName()
    {
        return "./partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  58 => 14,  53 => 12,  50 => 11,  46 => 10,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"py-2 w-full text-white relative\">
    <div class=\"flex flex-col md:flex-row items-center md:items-end justify-between\">
        <div class=\"md:pr-10\">
        {% set home = pages.find('/home')%}
            <a href=\"{{ home.url }}\">
                <img class=\"h-20 lg:h-20 xl:h-32  w-auto\" src=\"https://buzzboxz.com/assets/logo.png\" alt=\"\"/>
            </a>
        </div>
        <ul class=\"flex items-center flex-wrap justify-center sm:justify-end\">
            {% for page in pages.children.visible %}
                <li>
                    <a href=\"{{ page.url }}\"
                        class=\" uppercase text-lg xl:text-[1.35rem] text-gray hover:font-semibold px-3 xl:px-7 \">
                    {{ page.menu }}
                    </a>
                </li>
            {% endfor %}

        </ul>
    </div>
    <div class=\"md:-mt-1 md:ml-[61px] border-b-2 border-gray h-1 z-10\"></div>
</header>", "./partials/navbar.html.twig", "C:\\xampp\\htdocs\\BaitAlZakhrafaDecor\\user\\themes\\quark\\templates\\partials\\navbar.html.twig");
    }
}
