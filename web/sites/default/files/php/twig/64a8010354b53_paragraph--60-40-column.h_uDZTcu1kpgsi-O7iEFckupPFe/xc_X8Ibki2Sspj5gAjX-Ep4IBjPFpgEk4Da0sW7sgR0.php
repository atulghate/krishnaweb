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

/* themes/custom/kirshnaweb/templates/paragraph--60-40-column.html.twig */
class __TwigTemplate_b8cc583a8ba83fd7523ac5f3e37db615258d0b1851e9a34463839e0aa8b3d68f extends \Twig\Template
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
        // line 1
        echo "
";
        // line 2
        $context["classes"] = [0 => (($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 3
($context["content"] ?? null), "field_column_type", [], "any", false, false, true, 3)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null), 1 => (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 4
($context["content"] ?? null), "field_alignment", [], "any", false, false, true, 4)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#markup"] ?? null) : null), 2 => (        // line 5
($context["alignment"] ?? null) - ($context["wrapper"] ?? null))];
        // line 7
        echo "
<div ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo " >
<div class = \"column-container\">  
<div class=\"image-column\">
    ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
  </div>
  <div class=\"text-column\">
    ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
  </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/kirshnaweb/templates/paragraph--60-40-column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  56 => 11,  50 => 8,  47 => 7,  45 => 5,  44 => 4,  43 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set classes = [
    content.field_column_type[0]['#markup'],
    content.field_alignment[0]['#markup'],
    alignment-wrapper
] %}

<div {{ attributes.addClass(classes) }} >
<div class = \"column-container\">  
<div class=\"image-column\">
    {{ content.field_image }}
  </div>
  <div class=\"text-column\">
    {{ content.field_description }}
  </div>
</div>
</div>
", "themes/custom/kirshnaweb/templates/paragraph--60-40-column.html.twig", "/var/www/html/web/themes/custom/kirshnaweb/templates/paragraph--60-40-column.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
