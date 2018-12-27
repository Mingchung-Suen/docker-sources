# 挑战网PHP7镜像

> 最近修订记录：
> 2017.12.27 - liuxuncheng 初稿  

**[Type]** `Middle Image`

本镜像内置Nginx，PHP7最新版以及一些必要支持（包括json, openssl, phar等扩展包），基于tz-base-alpine制作。

如需其他扩展，请在script/build中添加。

------

## Usage

首先，将你的项目代码放在根目录的APP目录下。  
cd到本镜像根目录，编译本镜像，必须使用`configure`生成编译配置，直接使用docker build会失败。

```sh
# 生成编译配置
./configure --name=tz-php7
# 无更新地生成编译配置
./configure --no-upgrade --name=tz-php7

# 开始编译
make build
```

如果在生成编译配置时出错，请检查./configure的权限是否是755。  
如果编译成功，通过`docker images`能看到编译完成的镜像。

之后可以通过镜像来运行容器：

```sh
# 不指定运行CMD时，将使用run hook来启动，此时可通过8080端口来访问Web服务
# 默认APP目录下是空的，因此你应该获得404响应: curl --head ${IP}:8080/hello.php
docker run -it --rm -p 8080:80 registry.op.tiaozhan.com/tz-php7

# 你也可以覆盖入口进程，以sh为例，但注意要自行启动supervisor
# 启动supervisor: supervisord -c /etc/supervisor.conf &
docker run -it --rm -p 8080:80 registry.op.tiaozhan.com/tz-php7 /bin/sh

# 测试镜像是否正常工作
docker run --rm registry.op.tiaozhan.com/tz-php7 test

# 显示镜像编译版本信息
docker run --rm registry.op.tiaozhan.com/tz-php7 version
```

网站默认配置位于`config/website.conf`

APP Image继承本镜像时若需要改动`website.conf`，可以在`build script`中将改动后的配置文件移动到`/etc/nginx/website.conf`即可。
