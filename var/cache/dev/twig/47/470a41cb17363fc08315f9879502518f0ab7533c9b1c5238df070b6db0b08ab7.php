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

/* propos/index.html.twig */
class __TwigTemplate_d1977abd36f661f6db976b7016cc9b0f09ad4d620791392d04b9c245b4fc5a85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propos/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propos/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "propos/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "à propos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<br><br>
<div class=\"container\">
 <div class=\"row\">
    <div class=\"col\">
    </div>
    <div class=\"col-9\">
      <h1 class=\"text-center\">A PROPOS</h1>
        <br>

        <div class=\"text-center\">
            <h2>Qui je suis</h2> <br>
            Je m'appelle Grégoire Acquadro et je suis un étudiant en 3ème année d'étude d'informatique à Paris Ynov Campus, spécialisé en administration système et réseaux.
            <br><br> <h2>Mon parcours</h2><br>
            En 2020, j'ai obtenu mon bac scientifique avec mention assez bien puis j'ai rejoint Paris Ynov Campus où pendant deux ans j'ai travaillé sur différents projets web et devs avec différents langages (golang, python, java, php...) et aussi de gestion d'infrastructure (Windows server/client, Ubuntu server/client, Debian server/client).
        </div>

        <br><br><br><br><br><br><br><br>

        <div class=\"text-center\">
        
            <div class=\"row\">
                <div class=\"col\"></div>
            

                <div class=\"col\">
                    <h1>
                        <span class=\"iconify\" data-icon=\"ion:logo-linkedin\"></span>
                        </h1> <a target=\"_blank\" href=\"https://www.linkedin.com/in/gr%C3%A9goire-acquadro-6b3a771b5/\">Mon linkedin </a>
                </div>


                <div class=\"col\">
                    <h1>
                        <span class=\"iconify\" data-icon=\"ion:logo-linkedin\"></span>
                        </h1> <a target=\"_blank\" href=\"https://github.com/GACQUADRO/mesagerie/files/9076344/cv_grgoire_acquadro_alternance_.pdf\">Mon CV </a>
                </div>
                <div class=\"col\"></div>

                    
            </div>
        
             
        </div>








    </div>
    <div class=\"col\">
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}à propos{% endblock %}

{% block body %}

<br><br>
<div class=\"container\">
 <div class=\"row\">
    <div class=\"col\">
    </div>
    <div class=\"col-9\">
      <h1 class=\"text-center\">A PROPOS</h1>
        <br>

        <div class=\"text-center\">
            <h2>Qui je suis</h2> <br>
            Je m'appelle Grégoire Acquadro et je suis un étudiant en 3ème année d'étude d'informatique à Paris Ynov Campus, spécialisé en administration système et réseaux.
            <br><br> <h2>Mon parcours</h2><br>
            En 2020, j'ai obtenu mon bac scientifique avec mention assez bien puis j'ai rejoint Paris Ynov Campus où pendant deux ans j'ai travaillé sur différents projets web et devs avec différents langages (golang, python, java, php...) et aussi de gestion d'infrastructure (Windows server/client, Ubuntu server/client, Debian server/client).
        </div>

        <br><br><br><br><br><br><br><br>

        <div class=\"text-center\">
        
            <div class=\"row\">
                <div class=\"col\"></div>
            

                <div class=\"col\">
                    <h1>
                        <span class=\"iconify\" data-icon=\"ion:logo-linkedin\"></span>
                        </h1> <a target=\"_blank\" href=\"https://www.linkedin.com/in/gr%C3%A9goire-acquadro-6b3a771b5/\">Mon linkedin </a>
                </div>


                <div class=\"col\">
                    <h1>
                        <span class=\"iconify\" data-icon=\"ion:logo-linkedin\"></span>
                        </h1> <a target=\"_blank\" href=\"https://github.com/GACQUADRO/mesagerie/files/9076344/cv_grgoire_acquadro_alternance_.pdf\">Mon CV </a>
                </div>
                <div class=\"col\"></div>

                    
            </div>
        
             
        </div>








    </div>
    <div class=\"col\">
    </div>
  </div>
</div>
{% endblock %}
", "propos/index.html.twig", "/Users/gregoire/Desktop/Dossier ytrack/site_stage/stage/templates/propos/index.html.twig");
    }
}
