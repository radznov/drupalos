<?php

/* core/themes/bartik/templates/block--search-form-block.html.twig */
class __TwigTemplate_4c25f48b980771fab0379611b53241d532c91ac1b0ec4c3b30efb152832fd7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--search-form-block.html.twig", "core/themes/bartik/templates/block--search-form-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--search-form-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5af30c37bf161e3c4252eaea343b05f0fd3f6221b7ebc1e086f403a215b8159b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af30c37bf161e3c4252eaea343b05f0fd3f6221b7ebc1e086f403a215b8159b->enter($__internal_5af30c37bf161e3c4252eaea343b05f0fd3f6221b7ebc1e086f403a215b8159b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/block--search-form-block.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5af30c37bf161e3c4252eaea343b05f0fd3f6221b7ebc1e086f403a215b8159b->leave($__internal_5af30c37bf161e3c4252eaea343b05f0fd3f6221b7ebc1e086f403a215b8159b_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b1fc171fe252af7b34fcda8476e417da87776648bc7eabec6f1515965cd1bb6 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1fc171fe252af7b34fcda8476e417da87776648bc7eabec6f1515965cd1bb6->enter($__internal_4b1fc171fe252af7b34fcda8476e417da87776648bc7eabec6f1515965cd1bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content", 1 => "container-inline"), "method"), "html", null, true));
        echo ">
    ";
        // line 21
        $this->displayParentBlock("content", $context, $blocks);
        echo "
  </div>
";
        
        $__internal_4b1fc171fe252af7b34fcda8476e417da87776648bc7eabec6f1515965cd1bb6->leave($__internal_4b1fc171fe252af7b34fcda8476e417da87776648bc7eabec6f1515965cd1bb6_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  64 => 20,  58 => 19,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/bartik/templates/block--search-form-block.html.twig", "D:\\Programy\\wamp\\wamp64\\www\\dr\\core\\themes\\bartik\\templates\\block--search-form-block.html.twig");
    }
}
