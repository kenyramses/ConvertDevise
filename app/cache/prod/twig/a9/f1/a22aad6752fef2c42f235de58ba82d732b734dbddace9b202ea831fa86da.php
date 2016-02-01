<?php

/* ConvertDeviseBundle:Devise:formulaire.html.twig */
class __TwigTemplate_a9f1a22aad6752fef2c42f235de58ba82d732b734dbddace9b202ea831fa86da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylsheet' => array($this, 'block_stylsheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('stylsheet', $context, $blocks);
        // line 8
        echo "        <title>Accueil</title>
    </head>
    <body> 

 <div class=\"container\">
      <div class=\"row center-block\">
        
            <br>  <br>  <br>  <br>  <br>
        <div class=\"col-lg-4 col-lg-offset-4\"> 
  <form name=\"login-form\" class=\"login-form\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("convert_devise_admin");
        echo "\" method=\"post\">
                            <fieldset>
                                <div class=\"form-group\">
                    <!--USERNAME--><input type=\"text\" id=\"username\" name=\"_username\"  required=\"required\"  class=\"form-control\" value=\"Email\" onfocus=\"this.value=''\" /><!--END USERNAME-->
                                </div>
                                 <div class=\"form-group\">
                   <!--PASSWORD--><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" value=\"Mot de passe\" onfocus=\"this.value=''\" /><!--END PASSWORD-->
 
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                              <input type=\"submit\" name=\"submit\" value=\"Connexion\" class=\"btn btn-lg btn-success btn-block\" />
                              
                            </fieldset>
                        </form>
        </div>
      </div>
 </div>
    </body>
</html>
";
    }

    // line 4
    public function block_stylsheet($context, array $blocks = array())
    {
        // line 5
        echo "        <link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\"  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/style.css"), "html", null, true);
        echo "\" />
         ";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle:Devise:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  70 => 5,  67 => 4,  38 => 17,  27 => 8,  25 => 4,  20 => 1,);
    }
}
