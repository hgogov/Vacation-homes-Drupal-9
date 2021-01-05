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

/* themes/contrib/olivero/templates/content/node--teaser.html.twig */
class __TwigTemplate_d84e23b4c80582ab1bd42ec437de613de05e3741572c7df90398d6180af0cd3e extends \Twig\Template
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
        $tags = array("set" => 71, "if" => 85, "spaceless" => 88);
        $filters = array("clean_class" => 73, "escape" => 81, "t" => 88, "without" => 103);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'spaceless'],
                ['clean_class', 'escape', 't', 'without'],
                []
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
        // line 69
        echo "
";
        // line 71
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "bundle", [], "any", false, false, true, 73), 73, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 74)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 75)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 76)) ? ("node--unpublished") : ("")), 5 => ((        // line 77
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 77, $this->source)))) : (""))];
        // line 80
        echo "
<article";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
        echo ">
  <header>
    ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 83, $this->source), "html", null, true);
        echo "
    ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 84, $this->source), "html", null, true);
        echo "
    ";
        // line 85
        if (($context["display_submitted"] ?? null)) {
            // line 86
            echo "      <div class=\"node__meta\">
        <span";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 87, $this->source), "html", null, true);
            echo ">
          ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            echo " ";
            ob_start(function () { return ''; });
            echo "<span class=\"node__author\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 88, $this->source), "html", null, true);
            echo "</span>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 88, $this->source), "html", null, true);
            echo "
        </span>
        ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 90, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 93
        echo "    ";
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 94
            echo "      <div class=\"node__top-wrapper\">
        ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
        <h2";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo ">
          <a href=\"";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 97, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 97, $this->source), "html", null, true);
            echo "</a>
        </h2>
      </div>
    ";
        }
        // line 101
        echo "  </header>
  <div";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => ($context["layout"] ?? null), 2 => "text-content"], "method", false, false, true, 102), 102, $this->source), "html", null, true);
        echo ">
    ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 103, $this->source), "field_image", "links"), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/content/node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 103,  142 => 102,  139 => 101,  130 => 97,  126 => 96,  122 => 95,  119 => 94,  116 => 93,  110 => 90,  97 => 88,  93 => 87,  90 => 86,  88 => 85,  84 => 84,  80 => 83,  75 => 81,  72 => 80,  70 => 77,  69 => 76,  68 => 75,  67 => 74,  66 => 73,  65 => 71,  62 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/content/node--teaser.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\contrib\\olivero\\templates\\content\\node--teaser.html.twig");
    }
}
