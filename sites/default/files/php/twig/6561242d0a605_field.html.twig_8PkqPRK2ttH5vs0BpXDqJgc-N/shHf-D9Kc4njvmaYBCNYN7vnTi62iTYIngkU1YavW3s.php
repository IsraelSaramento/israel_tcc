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

/* field.html.twig */
class __TwigTemplate_bfa8c681069524537bf7342c509c30c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'field_label' => [$this, 'block_field_label'],
            'field_label_value' => [$this, 'block_field_label_value'],
            'field_items' => [$this, 'block_field_items'],
            'field_item' => [$this, 'block_field_item'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 10
($context["field_name"] ?? null), 10, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 11
($context["field_type"] ?? null), 11, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 12
($context["label_display"] ?? null), 12, $this->source)), 4 => (( !        // line 13
($context["display_items_wrapper_tag"] ?? null)) ? ("field__items") : (""))];
        // line 17
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 19
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 22
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        if (($context["display_field_tag"] ?? null)) {
            echo "
  <";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("field_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["field_tag"] ?? null), 24, $this->source), "div")) : ("div")), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">";
        }
        // line 26
        if ( !($context["label_hidden"] ?? null)) {
            // line 27
            $this->displayBlock('field_label', $context, $blocks);
        }
        // line 37
        $this->displayBlock('field_items', $context, $blocks);
        // line 58
        if (($context["display_field_tag"] ?? null)) {
            echo "
  </";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("field_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["field_tag"] ?? null), 59, $this->source), "div")) : ("div")), "html", null, true);
            echo ">";
        }
    }

    // line 27
    public function block_field_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "
    ";
        // line 28
        if (($context["display_label_tag"] ?? null)) {
            echo "<";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("label_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_tag"] ?? null), 28, $this->source), "div")) : ("div")), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
            echo ">";
        }
        // line 29
        $this->displayBlock('field_label_value', $context, $blocks);
        // line 32
        if (($context["display_label_tag"] ?? null)) {
            // line 33
            echo "</";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("label_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["label_tag"] ?? null), 33, $this->source), "div")) : ("div")), "html", null, true);
            echo ">";
        }
    }

    // line 29
    public function block_field_label_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 30, $this->source), "html", null, true);
    }

    // line 37
    public function block_field_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        if (($context["display_items_wrapper_tag"] ?? null)) {
            echo "
    <";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("field_items_wrapper_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["field_items_wrapper_tag"] ?? null), 39, $this->source), "div")) : ("div")), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field_items_wrapper_attributes"] ?? null), "addClass", [0 => "field__items"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo ">";
        }
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            $this->displayBlock('field_item', $context, $blocks);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        if (($context["display_items_wrapper_tag"] ?? null)) {
            echo "
    </";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("field_items_wrapper_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["field_items_wrapper_tag"] ?? null), 55, $this->source), "div")) : ("div")), "html", null, true);
            echo ">";
        }
    }

    // line 42
    public function block_field_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        if (($context["display_item_tag"] ?? null)) {
            echo "
        <";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("field_item_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["field_item_tag"] ?? null), 44, $this->source), "div")) : ("div")), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, true, 44), "addClass", [0 => "field__item"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
            echo ">";
        }
        // line 46
        $this->displayBlock('field_value', $context, $blocks);
        // line 49
        if (($context["display_item_tag"] ?? null)) {
            // line 50
            echo "</";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("field_item_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["field_item_tag"] ?? null), 50, $this->source), "div")) : ("div")), "html", null, true);
            echo ">";
        }
    }

    // line 46
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 47,  197 => 46,  190 => 50,  188 => 49,  186 => 46,  181 => 44,  177 => 43,  173 => 42,  167 => 55,  163 => 54,  149 => 42,  132 => 41,  127 => 39,  123 => 38,  119 => 37,  115 => 30,  111 => 29,  104 => 33,  102 => 32,  100 => 29,  93 => 28,  87 => 27,  81 => 59,  77 => 58,  75 => 37,  72 => 27,  70 => 26,  65 => 24,  61 => 23,  54 => 22,  52 => 19,  51 => 17,  49 => 13,  48 => 12,  47 => 11,  46 => 10,  45 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "field.html.twig", "modules/contrib/fences/templates/field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "block" => 22, "if" => 23, "for" => 41);
        static $filters = array("clean_class" => 10, "escape" => 24, "default" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['clean_class', 'escape', 'default'],
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
