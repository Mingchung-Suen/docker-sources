# 挑战网alpine基础镜像

> 最近修订记录：
>
> 2015.11.17 - xczh - 初稿
>
> 2016.07.06 - xczh - 调整结构

**[Type]** Base Image

tz轻量基础镜像提供轻量级的运行体验，能让APP运行得更快、占用资源更少。

根据Docker官方建议，本镜像自2016-05以来，已经取代Debian作为我们的默认基础镜像。

------

## Notes

1. tz-base镜像直接继承alpine镜像，该镜像对busybox做了适当扩充，非常适合容器。
2. Script下有这些Hook：build将在镜像编译阶段执行，run用于在不指定运行CMD时提供默认镜像入口，test用与镜像测试，应该在这里完成镜像功能测试以确保构建的镜像工作正常。
3. 镜像已经设置好了apk源地址和时区，middle image的制作应该基于上述Hook来实现。一般来说，middle image不需要覆盖默认run hook。
4. app image应该实现上述三个hook。

## Usage

首先编译本镜像，必须使用`configure`生成编译配置，直接使用docker build会失败。

```sh
# 生成编译配置
./configure --name=tz-base-alpine --tag=3.3

# 开始编译
make build
```

如果编译成功，通过`docker images`能看到编译完成的镜像。

通过镜像来运行容器：

```sh
# 不指定运行CMD时，将使用run hook来启动
docker run -it --rm registry.op.tiaozhan.com/tz-base-alpine:3.3 

# 你也可以覆盖入口进程，以sh为例
docker run -it --rm registry.op.tiaozhan.com/tz-base-alpine:3.3 /bin/sh

# 测试镜像是否正常工作
docker run --rm registry.op.tiaozhan.com/tz-base-alpine:3.3 test

# 显示镜像编译版本信息
docker run --rm registry.op.tiaozhan.com/tz-base-alpine:3.3 version
```