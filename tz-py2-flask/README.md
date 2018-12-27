# 挑战网python3镜像

> 最近修订记录：  
> 2016.07.11 - Luffbee 初稿  
> 2017.01.10 - Luffbee 改为基于tz-nginx

**[Type]** Middle Image

本镜像内置flask，基于tz-py2-uwsgi制作。

------

## Usage

首先把项目源代码放在APP目录下。  
入口python文件默认是uwsgifile.py，如果有特殊需求，请通过设置`MAINFILE`环境变量来设定入口文件。  
例如要把入口文件设为index.py，`MAINFILE`应设为`index`。  
可执行对象默认调用app，如需更改，请通过`CALLABLE`环境变量来设置。  
例如要改为调用index对象或函数，`CALLABLE`应设为`index`。

编译本镜像，必须使用`configure`生成编译配置，直接使用docker build会失败。

```sh
# 生成编译配置
./configure --name=<YOUR PROJECT NAME(此处我们以tz-py2-flask为例)>

# 开始编译
make build
```

如果编译成功，通过`docker images`能看到编译完成的镜像。

通过镜像来运行容器：

```sh
# 不指定运行CMD时，将使用run hook来启动
docker run --rm registry.op.tiaozhan.com/tz-py2-flask

# 你也可以覆盖入口进程，以sh为例
docker run -it --rm registry.op.tiaozhan.com/tz-py2-flask /bin/sh

# 测试镜像是否正常工作
docker run --rm registry.op.tiaozhan.com/tz-py2-flask test

# 显示镜像编译版本信息
docker run --rm registry.op.tiaozhan.com/tz-py2-flask version
```
