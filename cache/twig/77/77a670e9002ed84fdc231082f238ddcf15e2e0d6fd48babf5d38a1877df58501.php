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

/* ./partials/footer.html.twig */
class __TwigTemplate_2fa7e047fed8bae23faec3fcfe2293b8f416c9ff3dd409dd592a1b68170dd522 extends \Twig\Template
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
        $context["contact"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/contact"], "method");
        // line 2
        echo "<footer class='mt-10 text-white my-16'>
    <div class=\"container flex flex-col md:flex-row items-center justify-between border-t border-white/50\">
        <p>© 2024 All Right Reserved by Bait Alzakhrafa Decoration. | Powered by | Five Ocean Computers</p>
        <ul class=\"flex items-center gap-x-5 mt-5\">
            <li>
                <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "facebook_link", []), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg class=\"h-7 w-auto text-white hover:text-primary\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 20 20\">
                        <path fill=\"currentColor\" fill-rule=\"evenodd\"
                            d=\"M18.896 0H1.104C.494 0 0 .494 0 1.104v17.792C0 19.506.494 20 1.104 20h9.578v-7.745H8.076V9.237h2.606V7.01c0-2.584 1.578-3.99 3.883-3.99c1.104 0 2.052.082 2.329.119v2.7h-1.598c-1.254 0-1.496.596-1.496 1.47v1.927h2.989l-.39 3.018h-2.6V20h5.097c.61 0 1.104-.494 1.104-1.104V1.104C20 .494 19.506 0 18.896 0\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "twitter_link", []), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\"
                        viewBox=\"0 0 20 20\">
                        <path fill=\"currentColor\" fill-rule=\"evenodd\"
                            d=\"M20 3.894a8.3 8.3 0 0 1-2.357.636a4.06 4.06 0 0 0 1.804-2.234a8.3 8.3 0 0 1-2.605.98A4.13 4.13 0 0 0 13.847 2c-2.266 0-4.103 1.808-4.103 4.04q0 .475.106.92a11.7 11.7 0 0 1-8.457-4.22a4 4 0 0 0-.556 2.03a4.02 4.02 0 0 0 1.826 3.362a4.14 4.14 0 0 1-1.859-.505v.05c0 1.957 1.414 3.59 3.29 3.961a4.2 4.2 0 0 1-1.852.07c.522 1.604 2.037 2.772 3.833 2.805a8.3 8.3 0 0 1-5.096 1.73A8 8 0 0 1 0 16.185A11.75 11.75 0 0 0 6.29 18c7.547 0 11.674-6.155 11.674-11.492q0-.263-.012-.523A8.3 8.3 0 0 0 20 3.895\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "linkedin_link", []), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\"
                        viewBox=\"0 0 24 24\">
                        <path fill=\"currentColor\"
                            d=\"M19.707 3H4.347a1.3 1.3 0 0 0-1.306 1.306v15.388c0 .696.58 1.306 1.306 1.306h15.3a1.3 1.3 0 0 0 1.307-1.306V4.277C21.013 3.581 20.432 3 19.707 3M8.354 18.3H5.713V9.735h2.642zM7.019 8.545a1.53 1.53 0 0 1-1.538-1.539c0-.841.696-1.538 1.538-1.538s1.54.697 1.54 1.538s-.64 1.54-1.54 1.54M18.371 18.3h-2.642v-4.152c0-.987-.029-2.293-1.393-2.293c-1.394 0-1.597 1.103-1.597 2.206V18.3h-2.642V9.735h2.584v1.19h.029c.377-.696 1.22-1.393 2.526-1.393c2.7 0 3.193 1.742 3.193 4.123V18.3z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "youtube_link", []), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\" viewBox=\"0 0 512 512\">
                        <path fill=\"currentColor\"
                            d=\"M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149C1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5c58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5c2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9M207 353.89v-196.5l145 98.2Z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "pinterest_link", []), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\" viewBox=\"0 0 1536 1536\">
                        <path fill=\"currentColor\"
                            d=\"M1248 0q119 0 203.5 84.5T1536 288v960q0 119-84.5 203.5T1248 1536H523q85-122 108-210q9-34 53-209q21 39 73.5 67t112.5 28q181 0 295.5-147.5T1280 691q0-84-35-162.5t-96.5-139t-152.5-97T799 256q-104 0-194.5 28.5t-153 76.5T344 470.5t-66.5 128T256 731q0 102 39.5 180T412 1021q13 5 23.5 0t14.5-19q10-44 15-61q6-23-11-42q-50-62-50-150q0-150 103.5-256.5T778 386q149 0 232.5 81t83.5 210q0 168-67.5 286T853 1081q-60 0-97-43.5T733 934q8-34 26.5-92.5t29.5-102t11-74.5q0-49-26.5-81.5T698 551q-61 0-103.5 56.5T552 747q0 72 24 121l-98 414q-24 100-7 254H288q-119 0-203.5-84.5T0 1248V288Q0 169 84.5 84.5T288 0z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"mailto:";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contact"] ?? null), "header", []), "email", []), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\" viewBox=\"0 0 24 24\">
                        <path fill=\"currentColor\"
                            d=\"m20 8l-8 5l-8-5V6l8 5l8-5m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2\"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "./partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 50,  86 => 42,  75 => 34,  63 => 25,  51 => 16,  39 => 7,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set contact = pages.find(\"/contact\")%}
<footer class='mt-10 text-white my-16'>
    <div class=\"container flex flex-col md:flex-row items-center justify-between border-t border-white/50\">
        <p>© 2024 All Right Reserved by Bait Alzakhrafa Decoration. | Powered by | Five Ocean Computers</p>
        <ul class=\"flex items-center gap-x-5 mt-5\">
            <li>
                <a href=\"{{ contact.header.facebook_link }}\" target=\"_blank\">
                    <svg class=\"h-7 w-auto text-white hover:text-primary\" xmlns=\"http://www.w3.org/2000/svg\"
                        viewBox=\"0 0 20 20\">
                        <path fill=\"currentColor\" fill-rule=\"evenodd\"
                            d=\"M18.896 0H1.104C.494 0 0 .494 0 1.104v17.792C0 19.506.494 20 1.104 20h9.578v-7.745H8.076V9.237h2.606V7.01c0-2.584 1.578-3.99 3.883-3.99c1.104 0 2.052.082 2.329.119v2.7h-1.598c-1.254 0-1.496.596-1.496 1.47v1.927h2.989l-.39 3.018h-2.6V20h5.097c.61 0 1.104-.494 1.104-1.104V1.104C20 .494 19.506 0 18.896 0\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"{{ contact.header.twitter_link }}\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\"
                        viewBox=\"0 0 20 20\">
                        <path fill=\"currentColor\" fill-rule=\"evenodd\"
                            d=\"M20 3.894a8.3 8.3 0 0 1-2.357.636a4.06 4.06 0 0 0 1.804-2.234a8.3 8.3 0 0 1-2.605.98A4.13 4.13 0 0 0 13.847 2c-2.266 0-4.103 1.808-4.103 4.04q0 .475.106.92a11.7 11.7 0 0 1-8.457-4.22a4 4 0 0 0-.556 2.03a4.02 4.02 0 0 0 1.826 3.362a4.14 4.14 0 0 1-1.859-.505v.05c0 1.957 1.414 3.59 3.29 3.961a4.2 4.2 0 0 1-1.852.07c.522 1.604 2.037 2.772 3.833 2.805a8.3 8.3 0 0 1-5.096 1.73A8 8 0 0 1 0 16.185A11.75 11.75 0 0 0 6.29 18c7.547 0 11.674-6.155 11.674-11.492q0-.263-.012-.523A8.3 8.3 0 0 0 20 3.895\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"{{ contact.header.linkedin_link }}\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\"
                        viewBox=\"0 0 24 24\">
                        <path fill=\"currentColor\"
                            d=\"M19.707 3H4.347a1.3 1.3 0 0 0-1.306 1.306v15.388c0 .696.58 1.306 1.306 1.306h15.3a1.3 1.3 0 0 0 1.307-1.306V4.277C21.013 3.581 20.432 3 19.707 3M8.354 18.3H5.713V9.735h2.642zM7.019 8.545a1.53 1.53 0 0 1-1.538-1.539c0-.841.696-1.538 1.538-1.538s1.54.697 1.54 1.538s-.64 1.54-1.54 1.54M18.371 18.3h-2.642v-4.152c0-.987-.029-2.293-1.393-2.293c-1.394 0-1.597 1.103-1.597 2.206V18.3h-2.642V9.735h2.584v1.19h.029c.377-.696 1.22-1.393 2.526-1.393c2.7 0 3.193 1.742 3.193 4.123V18.3z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"{{ contact.header.youtube_link }}\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\" viewBox=\"0 0 512 512\">
                        <path fill=\"currentColor\"
                            d=\"M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149C1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5c58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5c2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9M207 353.89v-196.5l145 98.2Z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"{{ contact.header.pinterest_link }}\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\" viewBox=\"0 0 1536 1536\">
                        <path fill=\"currentColor\"
                            d=\"M1248 0q119 0 203.5 84.5T1536 288v960q0 119-84.5 203.5T1248 1536H523q85-122 108-210q9-34 53-209q21 39 73.5 67t112.5 28q181 0 295.5-147.5T1280 691q0-84-35-162.5t-96.5-139t-152.5-97T799 256q-104 0-194.5 28.5t-153 76.5T344 470.5t-66.5 128T256 731q0 102 39.5 180T412 1021q13 5 23.5 0t14.5-19q10-44 15-61q6-23-11-42q-50-62-50-150q0-150 103.5-256.5T778 386q149 0 232.5 81t83.5 210q0 168-67.5 286T853 1081q-60 0-97-43.5T733 934q8-34 26.5-92.5t29.5-102t11-74.5q0-49-26.5-81.5T698 551q-61 0-103.5 56.5T552 747q0 72 24 121l-98 414q-24 100-7 254H288q-119 0-203.5-84.5T0 1248V288Q0 169 84.5 84.5T288 0z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"mailto:{{ contact.header.email }}\" target=\"_blank\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-7 w-auto text-white hover:text-primary\" viewBox=\"0 0 24 24\">
                        <path fill=\"currentColor\"
                            d=\"m20 8l-8 5l-8-5V6l8 5l8-5m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2\"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>", "./partials/footer.html.twig", "C:\\xampp\\htdocs\\BaitAlZakhrafaDecor\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
