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

/* themes/contrib/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig */
class __TwigTemplate_ab5c1cf13131dc17b8df651d7806a8a61912a31067d62797c12c5f9cdc5a94ef extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 18, "if" => 25, "block" => 29);
        $filters = array("escape" => 23, "t" => 30);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
        // line 18
        $context["classes"] = [0 => "block", 1 => "block-search"];
        // line 23
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo ">
  ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 24, $this->source), "html", null, true);
        echo "
  ";
        // line 25
        if (($context["label"] ?? null)) {
            // line 26
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 26, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 26, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 28
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 28, $this->source), "html", null, true);
        echo "
  ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "</div>
";
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <button class=\"header-nav__search-button\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle Search Form"));
        echo "\">
      <svg width=\"22\" height=\"23\" viewBox=\"0 0 22 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><title>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Toggle Search Form");
        echo "</title><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10ZM15.7608 18.175C14.1323 19.3246 12.145 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10C20 12.6561 18.9645 15.0703 17.2752 16.8609L21.7071 21.2929C22.0976 21.6834 22.0976 22.3166 21.7071 22.7071C21.3166 23.0976 20.6834 23.0976 20.2929 22.7071L15.7608 18.175Z\" fill=\"#0D1214\"/>
      <div class=\"header-nav__search-button__close\"></div>
    </button>

    <div";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "search-wide__wrapper"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">
      <div class=\"search-wide__container\">
        <div class=\"search-wide__grid\">
          ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 38, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  112 => 35,  105 => 31,  100 => 30,  96 => 29,  91 => 43,  89 => 29,  84 => 28,  76 => 26,  74 => 25,  70 => 24,  65 => 23,  63 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\contrib\\olivero\\templates\\block\\block--secondary-menu--plugin-id--search-form-block.html.twig");
    }
}
