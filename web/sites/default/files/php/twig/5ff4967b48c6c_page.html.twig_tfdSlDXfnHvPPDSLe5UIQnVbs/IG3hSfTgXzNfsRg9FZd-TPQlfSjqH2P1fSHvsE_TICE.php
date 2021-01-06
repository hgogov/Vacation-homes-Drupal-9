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

/* themes/contrib/olivero/templates/layout/page.html.twig */
class __TwigTemplate_f40998f3f142f5c763ea33ca6d3312703b2d0560e30673e24830981ba7db95df extends \Twig\Template
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
        $tags = array("if" => 52);
        $filters = array("escape" => 71, "t" => 75);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        // line 48
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 52
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52))) {
            // line 53
            echo "      <header id=\"header\" class=\"header site-header\" role=\"banner\">

        <!-- Gets fixed by JS at wide widths -->
        <div class=\"site-header__fixable fixable\">
          <div class=\"header__left\">
            <button class=\"nav-primary__button\" aria-controls=\"site-header__inner\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
              <span class=\"nav-primary__icon\">
                <div></div>
                <div></div>
                <div></div>
              </span>
            </button>
          </div>

          <!-- Needs to extend full width so box shadow will also extend -->
          <div id=\"site-header__inner\" class=\"site-header__inner\">
            <div class=\"container site-header__inner__container\">

              ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "

              ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 73) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 73))) {
                // line 74
                echo "                <div class=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" aria-label=\"";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle Main Menu"));
                echo "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <div class=\"mobile-nav-button__label\">";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</div>
                    <div class=\"mobile-nav-button__icon\"></div>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-menu-open=\"false\">

                  ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "

                  ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 85)) {
                    // line 86
                    echo "                    <div class=\"secondary-nav__wrapper\">
                      ";
                    // line 87
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 90
                echo "                </div>
              ";
            }
            // line 92
            echo "            </div>
          </div>
        </div>
      </header>
    ";
        }
        // line 97
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <main id=\"content\" class=\"main-content \" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "
          <div class=\"main-content__container container\">
            ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
            ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
            ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
            ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 107)) {
            // line 108
            echo "              <div class=\"sidebar-grid grid-full\">
                ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
                ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
              </div>
            ";
        } else {
            // line 113
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 115
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
          </div>
        </main>
        <div class=\"social-bar\">
          ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "
        ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
      </div>
    </footer>

    <div class=\"overlay\"></div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 127,  204 => 126,  194 => 119,  186 => 115,  180 => 113,  174 => 110,  170 => 109,  167 => 108,  165 => 107,  161 => 106,  157 => 105,  153 => 104,  148 => 102,  141 => 97,  134 => 92,  130 => 90,  124 => 87,  121 => 86,  119 => 85,  114 => 83,  104 => 76,  100 => 75,  97 => 74,  95 => 73,  90 => 71,  70 => 53,  68 => 52,  62 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\contrib\\olivero\\templates\\layout\\page.html.twig");
    }
}
