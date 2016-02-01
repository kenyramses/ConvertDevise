<?php

/* ::layoutAdmin.html.twig */
class __TwigTemplate_7d2fd94aa571db2c94dd9b48cb8f81781a98962cddb0c5ac7d19499ed269ad84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylsheet' => array($this, 'block_stylsheet'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <html>
    <head>
        ";
        // line 3
        $this->displayBlock('stylsheet', $context, $blocks);
        // line 7
        echo "        <title>Accueil</title>
    </head>
    <body> 

<div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header col-lg-10\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"\"> Admin</a>
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->
            <div class=\"navbar nav-justified col-lg-6 col-lg-pull-2\">
                   <ul class=\"navbar collapse navbar-collapse  nav-tabs navbar-top-links navbar-right col-lg-10\">
                       
                       
                       <li class=\"btn-info well\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("convert_devise_admin_add");
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span>Ajouter une devise</a></li>
                       <li class=\"btn-info well\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("convert_devise_admin_get");
        echo "\"><span class=\"glyphicon glyphicon-euro\"></span>Voir devise disponible</a></li>
                        <li class=\"btn-info well\">
                            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("convert_devise_admin_voirhistorique");
        echo "\"><span class=\"glyphicon glyphicon-calendar\"></span> Voir l'historique</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li class=\"btn-info well\">
                            <a class=\"courbe\"><span class=\"glyphicon glyphicon-signal\"></span> Voir Courbe</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                         <li class=\"btn-default well\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("convert_devise_admin_param");
        echo "\"><span class=\"glyphicon glyphicon-zoom-in\"></span>Parametrage</a></li>
                         <li class=\"btn-default well\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("convert_devise_admin_capecha");
        echo "\"><span class=\"glyphicon glyphicon-zoom-in\"></span>Mail</a></li>
                        
                    </ul>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-lg-offset-4\">
                    <h1 class=\"page-header center-block\">Tableau de bord</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
\t\t  
      <div id=\"chart\"></div>
\t <!-- /.row -->
            <div class=\"row\">
               
                   ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo " 
              
            </div>   
           
        </div>
        <!-- /#page-wrapper -->
</div>
   
     ";
        // line 73
        $this->displayBlock('javascript', $context, $blocks);
        // line 138
        echo "          
     </body>
</html>
";
    }

    // line 3
    public function block_stylsheet($context, array $blocks = array())
    {
        // line 4
        echo "        <link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\"  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/style.css"), "html", null, true);
        echo "\" />
         ";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        // line 65
        echo "                   ";
    }

    // line 73
    public function block_javascript($context, array $blocks = array())
    {
        // line 74
        echo "       <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script> 
        
      <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
      <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/ajax.js"), "html", null, true);
        echo "\"></script> 
    
      <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.devise-converter.js"), "html", null, true);
        echo "\"></script> 
      <script src=\"http://code.highcharts.com/highcharts.js\"></script>
      <script src=\"http://code.highcharts.com/modules/exporting.js\"></script>

     
      
<script>
  jQuery(document).ready(function() {
 \$(\".courbe\").on('click', function(){

    
\t\$(\"#chart\").html(\"Chargement...\");
\t
\tvar options = {
\t\tchart: {
\t\t\trenderTo: 'chart',
\t\t},
\t\tcredits: {
\t\t\tenabled: false
\t\t},
\t\ttitle: {
\t\t\ttext: 'Cour/Click Overview',
\t\t\tx: -20
\t\t},
\t\txAxis: {
\t\t\tcategories: [{}]
\t\t},
\t\ttooltip: {
            formatter: function() {
                var s = '<b>'+ this.x +'</b>';
                
                \$.each(this.points, function(i, point) {
                    s += '<br/>'+point.series.name+': '+point.y;
                });
                
                return s;
            },
            shared: true
        },
\t\tseries: [{},{}]
\t};
\t
    \$.ajax({
\t\turl: \"http://localhost/ConvertDevise/web/admin/courbe\",
\t\tdata: 'show=impression',
\t\ttype:'post',
\t\tdataType: \"json\",
\t\tsuccess: function(data){
                        console.log(data);
\t\t\toptions.xAxis.categories = data.date[0];
\t\t\toptions.series[0].name = 'Cour';
\t\t\toptions.series[0].data = data.cour;
\t\t\t
\t\t\tvar chart = new Highcharts.Chart(options);\t\t\t
\t\t}
\t});
});
});
      </script> 
 ";
    }

    public function getTemplateName()
    {
        return "::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 79,  157 => 77,  153 => 76,  147 => 74,  144 => 73,  140 => 65,  137 => 64,  131 => 5,  126 => 4,  123 => 3,  116 => 138,  114 => 73,  104 => 65,  102 => 64,  80 => 45,  76 => 44,  64 => 35,  59 => 33,  55 => 32,  28 => 7,  26 => 3,  22 => 1,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
