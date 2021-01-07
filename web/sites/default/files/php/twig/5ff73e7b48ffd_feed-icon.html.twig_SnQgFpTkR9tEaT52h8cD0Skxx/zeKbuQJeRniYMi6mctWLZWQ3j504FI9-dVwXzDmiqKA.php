<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/olivero/templates/misc/feed-icon.html.twig */
class __TwigTemplate_ea7cef36d41302a6ccd229cf3c858865e2bc73464cee0bdb395df8bde660f1eb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 20, "set" => 21, "include" => 29);
        $filters = array("escape" => 14, "t" => 21);
        $functions = array("attach_library" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/feed"), "html", null, true);
        echo "

";
        // line 20
        if (( !(isset($context["title"]) || array_key_exists("title", $context)) || (null === ($context["title"] ?? null)))) {
            // line 21
            echo "  ";
            $context["title"] = t("RSS Feed");
        }
        // line 23
        echo "
<a href=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "feed-icon"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
  <span class=\"feed-icon__label\">
    ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 26, $this->source), "html", null, true);
        echo "
  </span>
  <span class=\"feed-icon__icon\" aria-hidden=\"true\">
     ";
        // line 29
        $this->loadTemplate("@olivero/../images/rss.svg", "themes/contrib/olivero/templates/misc/feed-icon.html.twig", 29)->display($context);
        // line 30
        echo "  </span>
</a>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  92 => 29,  86 => 26,  79 => 24,  76 => 23,  72 => 21,  70 => 20,  65 => 14,  62 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/misc/feed-icon.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\contrib\\olivero\\templates\\misc\\feed-icon.html.twig");
    }
}
