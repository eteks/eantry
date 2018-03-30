from django.conf.urls import url
from master import views
from django.views.decorators.csrf import csrf_exempt

urlpatterns = [    
    url(r'^$', views.Login_pageview.as_view(), name='login'), # Notice the URL has been named
    url(r'^registration/$', views.Registration_pageview.as_view(), name='registration'),
    url(r'^forgot_password/$', views.Forgot_password_pageview.as_view(), name='forgot_password'),
    url(r'^index/$', csrf_exempt(views.Index_pageview.as_view()), name='index'),
    url(r'^exportor_datos/$', csrf_exempt(views.Exportor_datos_pageview.as_view()), name='exportor_datos'),
    url(r'^nueva_factura/$', csrf_exempt(views.Nueva_Factura_pageview.as_view()), name='nueva_factura'),
]