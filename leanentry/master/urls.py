from django.conf.urls import url
from master import views

urlpatterns = [
    
    url(r'^$', views.Login_pageview.as_view(), name='login'), # Notice the URL has been named
    url(r'^registration/$', views.Registration_pageview.as_view(), name='registration'),
    url(r'^forgot_password/$', views.Forgot_password_pageview.as_view(), name='forgot_password'),  
   
]