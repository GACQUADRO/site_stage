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

/* index/index.html.twig */
class __TwigTemplate_90ff716721bd685bf9daa14dd7735494ef0a39f43d8fe7d2c0e3c67cc43ae046 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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

        echo "Grégoire stage  ";
        
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

    <div class=\"article\" style=\"border: solid; border-radius: 30px; padding: 20px;\">
        <h1 class=\"text-center\">Viveris</h1>



        <br><br>

        
            <div>
                
                Viveris est une entreprise informatique qui participe à la transformation digitale des entreprises par la mise en œuvre de solutions simples, perfor...
            </div>
            <br><br>

            <div class=\"row\">
                    <div class=\"col\">                  </div>
                    <div class=\"col\"></div>
                    <div class=\"col\"></div>
                    <div class=\"col\"><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article01");
        echo "\">Lire la suite...</a></div>
                </div>
        </div>


                                                             
        <br><br><br>
    </div>
    <div class=\"col\">
    </div>
  </div>
</div>

<br><br>
<div class=\"container\">
 <div class=\"row\">
    <div class=\"col\">
    </div>
    <div class=\"col-9\">

    <div class=\"article\" style=\"border: solid; border-radius: 30px; padding: 20px;\">
        <h1 class=\"text-center\">Tâches effectuées.</h1>



        <br><br>

        
            <div>
                
                 Pendant mon stage, j'ai réalisé de nombreuses tâches. J'ai d'abord, à mon arrivé, préparé un PC (Création d'une clef USB bootable, puis installation windows et ajout applications. Une fois cela fait, j'ai...
            </div>
            <br><br>

            <div class=\"row\">
                    <div class=\"col\">                  </div>
                    <div class=\"col\"></div>
                    <div class=\"col\"></div>
                    <div class=\"col\"><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article02");
        echo "\">Lire la suite...</a></div>
                </div>
        </div>


                                                             
        <br><br><br>
    </div>
    <div class=\"col\">
    </div>
  </div>
</div>

<br><br>
<div class=\"container\">
 <div class=\"row\">
    <div class=\"col\">
    </div>
    <div class=\"col-9\">

    <div class=\"article\" style=\"border: solid; border-radius: 30px; padding: 20px;\">
        <h1 class=\"text-center\">Conclusion</h1>



        <br><br>

        
            <div>
                
                Ce stage m'a permis de mettre en pratique ce que j'ai appris ces deux dernières années. J'ai pu voir concrètement comment mettre en pratique ce que j'avais appris (serveur de...
            </div>
            <br><br>

            <div class=\"row\">
                    <div class=\"col\">                  </div>
                    <div class=\"col\"></div>
                    <div class=\"col\"></div>
                    <div class=\"col\"><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article04");
        echo "\">Lire la suite...</a></div>
                </div>
        </div>


                                                             
        <br><br><br>
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
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 108,  157 => 70,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Grégoire stage  {% endblock %}

{% block body %}

<br><br>
<div class=\"container\">
 <div class=\"row\">
    <div class=\"col\">
    </div>
    <div class=\"col-9\">

    <div class=\"article\" style=\"border: solid; border-radius: 30px; padding: 20px;\">
        <h1 class=\"text-center\">Viveris</h1>



        <br><br>

        
            <div>
                
                Viveris est une entreprise informatique qui participe à la transformation digitale des entreprises par la mise en œuvre de solutions simples, perfor...
            </div>
            <br><br>

            <div class=\"row\">
                    <div class=\"col\">                  </div>
                    <div class=\"col\"></div>
                    <div class=\"col\"></div>
                    <div class=\"col\"><a href=\"{{ path('app_article01') }}\">Lire la suite...</a></div>
                </div>
        </div>


                                                             
        <br><br><br>
    </div>
    <div class=\"col\">
    </div>
  </div>
</div>

<br><br>
<div class=\"container\">
 <div class=\"row\">
    <div class=\"col\">
    </div>
    <div class=\"col-9\">

    <div class=\"article\" style=\"border: solid; border-radius: 30px; padding: 20px;\">
        <h1 class=\"text-center\">Tâches effectuées.</h1>



        <br><br>

        
            <div>
                
                 Pendant mon stage, j'ai réalisé de nombreuses tâches. J'ai d'abord, à mon arrivé, préparé un PC (Création d'une clef USB bootable, puis installation windows et ajout applications. Une fois cela fait, j'ai...
            </div>
            <br><br>

            <div class=\"row\">
                    <div class=\"col\">                  </div>
                    <div class=\"col\"></div>
                    <div class=\"col\"></div>
                    <div class=\"col\"><a href=\"{{ path('app_article02') }}\">Lire la suite...</a></div>
                </div>
        </div>


                                                             
        <br><br><br>
    </div>
    <div class=\"col\">
    </div>
  </div>
</div>

<br><br>
<div class=\"container\">
 <div class=\"row\">
    <div class=\"col\">
    </div>
    <div class=\"col-9\">

    <div class=\"article\" style=\"border: solid; border-radius: 30px; padding: 20px;\">
        <h1 class=\"text-center\">Conclusion</h1>



        <br><br>

        
            <div>
                
                Ce stage m'a permis de mettre en pratique ce que j'ai appris ces deux dernières années. J'ai pu voir concrètement comment mettre en pratique ce que j'avais appris (serveur de...
            </div>
            <br><br>

            <div class=\"row\">
                    <div class=\"col\">                  </div>
                    <div class=\"col\"></div>
                    <div class=\"col\"></div>
                    <div class=\"col\"><a href=\"{{ path('app_article04') }}\">Lire la suite...</a></div>
                </div>
        </div>


                                                             
        <br><br><br>
    </div>
    <div class=\"col\">
    </div>
  </div>
</div>



{% endblock %}
", "index/index.html.twig", "/Users/gregoire/Desktop/Dossier ytrack/site_stage/stage/templates/index/index.html.twig");
    }
}
