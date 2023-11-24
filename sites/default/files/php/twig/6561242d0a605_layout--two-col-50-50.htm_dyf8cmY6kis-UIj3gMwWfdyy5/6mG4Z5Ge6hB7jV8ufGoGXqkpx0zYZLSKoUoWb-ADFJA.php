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

/* modules/custom/israel_tcc_layouts/layouts/two_col_50_50/layout--two-col-50-50.html.twig */
class __TwigTemplate_d16bc0edc818a89180ccf3ae4aea00e3 extends Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "grid-container", 1 => "layout", 2 => "layout--two-col"];
        // line 9
        $context["col_classes"] = [0 => "cell", 1 => "medium-12", 2 => "large-6", 3 => "layout__region"];
        // line 16
        if (($context["content"] ?? null)) {
            // line 17
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
            echo ">
    ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 18)) {
                // line 19
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "top", [], "any", false, false, true, 19), "addClass", [0 => "layout__region", 1 => "layout__region--top"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                echo ">
        ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 23
            echo "
    <div class='grid-x grid-margin-half layout__region'>
      ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 25)) {
                // line 26
                echo "        <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 26), "addClass", [0 => ($context["col_classes"] ?? null), 1 => "layout__region--first"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
                echo ">
          ";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 30
            echo "
      ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 31)) {
                // line 32
                echo "        <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 32), "addClass", [0 => ($context["col_classes"] ?? null), 1 => "layout__region--second"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                echo ">
          ";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 36
            echo "    </div>

    ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 38)) {
                // line 39
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "bottom", [], "any", false, false, true, 39), "addClass", [0 => "layout__region", 1 => "layout__region--bottom"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                echo ">
        ";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 43
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/israel_tcc_layouts/layouts/two_col_50_50/layout--two-col-50-50.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  107 => 40,  102 => 39,  100 => 38,  96 => 36,  90 => 33,  85 => 32,  83 => 31,  80 => 30,  74 => 27,  69 => 26,  67 => 25,  63 => 23,  57 => 20,  52 => 19,  50 => 18,  45 => 17,  43 => 16,  41 => 9,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/israel_tcc_layouts/layouts/two_col_50_50/layout--two-col-50-50.html.twig", "/app/modules/custom/israel_tcc_layouts/layouts/two_col_50_50/layout--two-col-50-50.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 16);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
}
