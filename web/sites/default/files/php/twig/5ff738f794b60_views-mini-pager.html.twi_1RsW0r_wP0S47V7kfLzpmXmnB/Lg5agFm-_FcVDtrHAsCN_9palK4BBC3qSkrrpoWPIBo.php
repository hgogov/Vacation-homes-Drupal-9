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

/* themes/contrib/olivero/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_3603e8066451198c74d82630280d58d13c4b60d80123dcb38b61e28e6209b9ae extends \Twig\Template
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
        $tags = array("if" => 13, "spaceless" => 19);
        $filters = array("escape" => 14, "t" => 15, "without" => 21);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless'],
                ['escape', 't', 'without'],
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
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 13))) {
            // line 14
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 14, $this->source), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 15, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 18
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 18)) {
                // line 19
                echo "        ";
                ob_start(function () { return ''; });
                // line 20
                echo "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 21), "href", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 21), "attributes", [], "any", false, false, true, 21), 21, $this->source), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--previous\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 29
                echo "      ";
            }
            // line 30
            echo "
      ";
            // line 32
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 32)) {
                // line 33
                echo "        <li class=\"pager__item pager__item--active\">
          ";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "
        </li>
      ";
            }
            // line 37
            echo "
      ";
            // line 39
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 39)) {
                // line 40
                echo "        ";
                ob_start(function () { return ''; });
                // line 41
                echo "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 42), "href", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), 42, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--next\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 50
                echo "      ";
            }
            // line 51
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  151 => 50,  141 => 43,  133 => 42,  130 => 41,  127 => 40,  124 => 39,  121 => 37,  115 => 34,  112 => 33,  109 => 32,  106 => 30,  103 => 29,  93 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  69 => 15,  64 => 14,  62 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/views/views-mini-pager.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\contrib\\olivero\\templates\\views\\views-mini-pager.html.twig");
    }
}
