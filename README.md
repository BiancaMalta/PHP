
# Configuração do Ambiente

Para executar o projeto, é necessário configurar o ambiente PHP. Você pode instalar e configurar manualmente o servidor Apache, a linguagem PHP e o banco de dados. Alternativamente, existem soluções mais simples para começar o desenvolvimento de seus projetos, como pacotes de software. Algumas opções disponíveis são:

- **XAMPP**: [Download](https://www.apachefriends.org/index.html)
- **WAMP**: [Download](https://wampserver.aviatechno.net/)
- **EasyPHP**: [Download](https://www.easyphp.org/)
- **AppServ**: [Download](https://www.appserv.org/)
- **Zwamp**: [Download](http://zwamp.sourceforge.net/)

Todas essas ferramentas necessitam de instalação. Entretanto, também existem versões portáteis disponíveis e arquivos executáveis que não necessitam de instalação, permitindo o desenvolvimento e a demonstração de sites PHP em qualquer lugar, usando um pendrive ou dispositivo similar, como a ferramente [USBWebServer](https://usbwebserver.yura.mk.ua/).

## Configuração Manual 
Entretanto, caso opte pela configuração manual, este documento fornece um guia passo a passo para instalar, configurar e executar um script PHP com o servidor Apache no Ubuntu.

## Requisitos

- Sistema operacional Ubuntu

## Passos

### 1. Instalar o Apache e o PHP

1. **Atualize os pacotes do sistema:**

   ```bash
   sudo apt update
   ```

2. **Instale o Apache:**

   ```bash
   sudo apt install apache2
   ```

3. **Instale o PHP:**

   ```bash
   sudo apt install php libapache2-mod-php
   ```

4. **Verifique as versões instaladas:**

   ```bash
   apache2 -v
   php -v
   ```

### 2. Preparar o Arquivo PHP

1. **Crie ou localize o arquivo PHP que você deseja executar.** Por exemplo, `index.php`.

2. **Mova o arquivo para o diretório padrão do Apache:**

   ```bash
   sudo mv /caminho/para/index.php /var/www/html/
   ```

### 3. Ajustar Permissões e Propriedade

1. **Defina as permissões e a propriedade do arquivo para permitir o acesso do Apache:**

   ```bash
   sudo chmod 644 /var/www/html/index.php
   sudo chown www-data:www-data /var/www/html/index.php
   ```

### 4. Reiniciar o Servidor Apache

1. **Reinicie o Apache para aplicar as alterações:**

   ```bash
   sudo systemctl restart apache2
   ```

### 5. Testar o Acesso

1. **Abra um navegador e acesse o script PHP através do endereço do servidor Apache:**

   ```
   http://localhost/index.php
   ```

### 6. Verificar Logs de Erro

1. **Se houver problemas, verifique os logs de erro do Apache para obter mais informações:**

   ```bash
   sudo tail -f /var/log/apache2/error.log
   ```

## Dicas

- **Verifique as Configurações do Apache**: Certifique-se de que as configurações do Apache permitem a execução de scripts PHP.
- **Permissões do Diretório**: Assegure-se de que o diretório `/var/www/html/` tenha as permissões corretas.

## Suporte

Para mais informações, consulte a [Documentação do Apache](https://httpd.apache.org/docs/) e a [Documentação do PHP](https://www.php.net/docs.php).

---
