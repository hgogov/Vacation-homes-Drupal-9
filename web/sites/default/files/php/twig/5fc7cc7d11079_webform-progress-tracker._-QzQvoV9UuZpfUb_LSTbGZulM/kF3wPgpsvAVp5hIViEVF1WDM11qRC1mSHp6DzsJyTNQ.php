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

/* modules/contrib/webform/templates/webform-progress-tracker.html.twig */
class __TwigTemplate_8a312c7f572ea6e8ff2a1a35b360f3fad14f0b552d7f4ce30cab6a05f906809a extends \Twig\Template
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
        $tags = array("for" => 23, "set" => 24, "if" => 42);
        $filters = array("escape" => 20, "length" => 42, "t" => 45);
        $functions = array("attach_library" => 20, "create_attribute" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'length', 't'],
                ['attach_library', 'create_attribute']
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
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.progress.tracker"), "html", null, true);
        echo "

<ul class=\"webform-progress-tracker progress-tracker progress-tracker--center\" data-webform-progress-steps>
  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["progress"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["page"]) {
            // line 24
            echo "    ";
            $context["is_completed"] = ($context["index"] < ($context["current_index"] ?? null));
            // line 25
            echo "    ";
            $context["is_active"] = ($context["index"] == ($context["current_index"] ?? null));
            // line 26
            echo "    ";
            // line 27
            $context["classes"] = [0 => "progress-step", 1 => ((            // line 29
($context["is_completed"] ?? null)) ? ("is-complete") : ("")), 2 => ((            // line 30
($context["is_active"] ?? null)) ? ("is-active") : (""))];
            // line 33
            echo "    ";
            // line 34
            $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "setAttribute", [0 => ("data-webform-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 35
$context["page"], "type", [], "any", false, false, true, 35), 35, $this->source)), 1 => twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, true, 35)], "method", false, false, true, 34), "setAttribute", [0 => "title", 1 => twig_get_attribute($this->env, $this->source,             // line 36
$context["page"], "title", [], "any", false, false, true, 36)], "method", false, false, true, 35), "setAttribute", [0 => "class", 1 => ""], "method", false, false, true, 36), "addClass", [0 =>             // line 38
($context["classes"] ?? null)], "method", false, false, true, 37);
            // line 40
            echo "    <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 40, $this->source), "html", null, true);
            echo ">
      <div class=\"progress-marker\" data-webform-progress-step data-webform-progress-link data-text=\"";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["index"] + 1), "html", null, true);
            echo "\"></div>
      ";
            // line 42
            if ((twig_length_filter($this->env, ($context["progress"] ?? null)) < ($context["max_pages"] ?? null))) {
                // line 43
                echo "        <div class=\"progress-text\">
          <div class=\"progress-title\" data-webform-progress-link>
            <span class=\"visually-hidden\" data-webform-progress-state>";
                // line 45
                if ((($context["is_active"] ?? null) || ($context["is_completed"] ?? null))) {
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["is_active"] ?? null)) ? (t("Current")) : (t("Completed"))));
                }
                echo "</span>
            ";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 50
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-progress-tracker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  119 => 50,  112 => 46,  106 => 45,  102 => 43,  100 => 42,  96 => 41,  91 => 40,  89 => 38,  88 => 36,  87 => 35,  86 => 34,  84 => 33,  82 => 30,  81 => 29,  80 => 27,  78 => 26,  75 => 25,  72 => 24,  68 => 23,  62 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-progress-tracker.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\modules\\contrib\\webform\\templates\\webform-progress-tracker.html.twig");
    }
}
