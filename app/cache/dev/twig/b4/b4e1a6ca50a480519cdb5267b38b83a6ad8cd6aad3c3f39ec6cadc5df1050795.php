<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9c4a75a60b2773c981e926150c79c84fe025f829a6c12cf331efa03789c98da3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dfb5f4fbb6fe7a38a82bc9f1a2d8f17cde830678320cd4c08d3086eb4ed9ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfb5f4fbb6fe7a38a82bc9f1a2d8f17cde830678320cd4c08d3086eb4ed9ac6->enter($__internal_2dfb5f4fbb6fe7a38a82bc9f1a2d8f17cde830678320cd4c08d3086eb4ed9ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dfb5f4fbb6fe7a38a82bc9f1a2d8f17cde830678320cd4c08d3086eb4ed9ac6->leave($__internal_2dfb5f4fbb6fe7a38a82bc9f1a2d8f17cde830678320cd4c08d3086eb4ed9ac6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8cfe469c6aa809fe6131e67dbaabb404cdb37a796a1b7cc06d12ce1a329b85ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfe469c6aa809fe6131e67dbaabb404cdb37a796a1b7cc06d12ce1a329b85ee->enter($__internal_8cfe469c6aa809fe6131e67dbaabb404cdb37a796a1b7cc06d12ce1a329b85ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8cfe469c6aa809fe6131e67dbaabb404cdb37a796a1b7cc06d12ce1a329b85ee->leave($__internal_8cfe469c6aa809fe6131e67dbaabb404cdb37a796a1b7cc06d12ce1a329b85ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8933590fe7739ecec0d5acc6fbf4dd399f008f16c42d883fb9c60d5332383b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8933590fe7739ecec0d5acc6fbf4dd399f008f16c42d883fb9c60d5332383b26->enter($__internal_8933590fe7739ecec0d5acc6fbf4dd399f008f16c42d883fb9c60d5332383b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8933590fe7739ecec0d5acc6fbf4dd399f008f16c42d883fb9c60d5332383b26->leave($__internal_8933590fe7739ecec0d5acc6fbf4dd399f008f16c42d883fb9c60d5332383b26_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_01b72951faded5d6c1d9f4e28718c18edf44b4e57481499dd59914f90e472159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b72951faded5d6c1d9f4e28718c18edf44b4e57481499dd59914f90e472159->enter($__internal_01b72951faded5d6c1d9f4e28718c18edf44b4e57481499dd59914f90e472159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_01b72951faded5d6c1d9f4e28718c18edf44b4e57481499dd59914f90e472159->leave($__internal_01b72951faded5d6c1d9f4e28718c18edf44b4e57481499dd59914f90e472159_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/www/my_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
