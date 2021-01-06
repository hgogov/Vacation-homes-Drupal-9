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

/* themes/contrib/olivero/templates/navigation/pager.html.twig */
class __TwigTemplate_6142f9ef4970ec31e13fbcd7469f9d7c6190439abd31728c49bae749f55e7635 extends \Twig\Template
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
        $tags = array("if" => 33, "spaceless" => 39, "for" => 72, "set" => 76);
        $filters = array("escape" => 34, "t" => 35, "without" => 41);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless', 'for', 'set'],
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
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "  <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 34, $this->source), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 35, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 38
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 38)) {
                // line 39
                echo "        ";
                ob_start(function () { return ''; });
                // line 40
                echo "          <li class=\"pager__item pager__item--control pager__item--first\">
            <a href=\"";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), 41, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--first\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M5.11201 7.19126L13.4118 1.15503C14.0728 0.674329 15 1.14648 15 1.96377V14.0362C15 14.8535 14.0728 15.3257 13.4118 14.845L5.11201 8.80874C4.56291 8.40939 4.56291 7.59061 5.11201 7.19126Z\"/>
                <rect width=\"2\" height=\"16\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 50
                echo "      ";
            }
            // line 51
            echo "
      ";
            // line 53
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 53)) {
                // line 54
                echo "        ";
                ob_start(function () { return ''; });
                // line 55
                echo "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56), "href", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56), "attributes", [], "any", false, false, true, 56), 56, $this->source), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--previous\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 64
                echo "      ";
            }
            // line 65
            echo "
      ";
            // line 67
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 67)) {
                // line 68
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 70
            echo "
      ";
            // line 72
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 72));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 73
                echo "        ";
                ob_start(function () { return ''; });
                // line 74
                echo "          <li class=\"pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo " pager__item--number\">
            ";
                // line 75
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 76
                    echo "              ";
                    $context["title"] = t("Current page");
                    // line 77
                    echo "            ";
                } else {
                    // line 78
                    echo "              ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 79
                    echo "            ";
                }
                // line 80
                echo "            ";
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 81
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                    echo "\" class=\"pager__link";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 81, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 81), 81, $this->source), "href", "title", "class"), "html", null, true);
                    echo ">
            ";
                }
                // line 83
                echo "            <span class=\"visually-hidden\">
              ";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>
            ";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 86, $this->source), "html", null, true);
                echo "
            ";
                // line 87
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 88
                    echo "              </a>
            ";
                }
                // line 90
                echo "          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 92
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
      ";
            // line 95
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 95)) {
                // line 96
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 98
            echo "
      ";
            // line 100
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 100)) {
                // line 101
                echo "        ";
                ob_start(function () { return ''; });
                // line 102
                echo "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 103), "href", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 103), "attributes", [], "any", false, false, true, 103), 103, $this->source), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--next\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 111
                echo "      ";
            }
            // line 112
            echo "
      ";
            // line 114
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 114)) {
                // line 115
                echo "        ";
                ob_start(function () { return ''; });
                // line 116
                echo "          <li class=\"pager__item pager__item--control pager__item--last\">
            <a href=\"";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "href", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "attributes", [], "any", false, false, true, 117), 117, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--last\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
                <rect x=\"13\" width=\"2\" height=\"16\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 126
                echo "      ";
            }
            // line 127
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 127,  297 => 126,  286 => 118,  278 => 117,  275 => 116,  272 => 115,  269 => 114,  266 => 112,  263 => 111,  253 => 104,  245 => 103,  242 => 102,  239 => 101,  236 => 100,  233 => 98,  229 => 96,  226 => 95,  223 => 93,  217 => 92,  213 => 90,  209 => 88,  207 => 87,  203 => 86,  198 => 84,  195 => 83,  183 => 81,  180 => 80,  177 => 79,  174 => 78,  171 => 77,  168 => 76,  166 => 75,  161 => 74,  158 => 73,  153 => 72,  150 => 70,  146 => 68,  143 => 67,  140 => 65,  137 => 64,  127 => 57,  119 => 56,  116 => 55,  113 => 54,  110 => 53,  107 => 51,  104 => 50,  93 => 42,  85 => 41,  82 => 40,  79 => 39,  76 => 38,  69 => 35,  64 => 34,  62 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/navigation/pager.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\contrib\\olivero\\templates\\navigation\\pager.html.twig");
    }
}
