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

/* themes/contrib/olivero/templates/content/node.html.twig */
class __TwigTemplate_ac0e527449492aeee78126c44ce12b0867f708a29566de4c2b311c9f82d6aa89 extends \Twig\Template
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
        $tags = array("set" => 70, "if" => 88, "spaceless" => 98);
        $filters = array("clean_class" => 70, "escape" => 84, "t" => 98, "without" => 106);
        $functions = array("attach_library" => 84);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'spaceless'],
                ['clean_class', 'escape', 't', 'without'],
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
        // line 69
        echo "
";
        // line 70
        $context["layout"] = ((($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 70, $this->source)))) : (""));
        // line 71
        echo "
";
        // line 73
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), 2 => ((        // line 76
($context["layout"] ?? null)) ? ("grid-full") : ("")), 3 => ((        // line 77
($context["layout"] ?? null)) ? ("ie11-autorow") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 78
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 78)) ? ("node--promoted") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 79)) ? ("node--sticky") : ("")), 6 => (( !twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 80)) ? ("node--unpublished") : ("")), 7 => ((        // line 81
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 81, $this->source)))) : (""))];
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/node"), "html", null, true);
        echo "
<article";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        echo ">
  <header class=\"";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 86, $this->source), "html", null, true);
        echo "\">
    ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 87, $this->source), "html", null, true);
        echo "
      ";
        // line 88
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 89
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            echo ">
        <a href=\"";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 90, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 90, $this->source), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 93
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 93, $this->source), "html", null, true);
        echo "
    ";
        // line 94
        if (($context["display_submitted"] ?? null)) {
            // line 95
            echo "      <div class=\"node__meta\">
        ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 96, $this->source), "html", null, true);
            echo "
        <span";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 97, $this->source), "html", null, true);
            echo ">
          ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            echo " ";
            ob_start(function () { return ''; });
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null), 98, $this->source), "html", null, true);
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo ", ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 98, $this->source), "html", null, true);
            echo "
        </span>
        ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 100, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 103
        echo "  </header>
  <div";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => ($context["layout"] ?? null)], "method", false, false, true, 104), 104, $this->source), "html", null, true);
        echo ">
    ";
        // line 106
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 106, $this->source), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 108)) {
            // line 109
            echo "    <div id=\"comments\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 109, $this->source), "html", null, true);
            echo "\">
      ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 113
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 113,  165 => 110,  160 => 109,  158 => 108,  152 => 106,  148 => 104,  145 => 103,  139 => 100,  128 => 98,  124 => 97,  120 => 96,  117 => 95,  115 => 94,  110 => 93,  102 => 90,  97 => 89,  95 => 88,  91 => 87,  87 => 86,  83 => 85,  79 => 84,  77 => 81,  76 => 80,  75 => 79,  74 => 78,  73 => 77,  72 => 76,  71 => 75,  70 => 73,  67 => 71,  65 => 70,  62 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/content/node.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\contrib\\olivero\\templates\\content\\node.html.twig");
    }
}
