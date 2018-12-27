# 挑战网debian基础镜像

> 最近修订记录：
>
> 2015.11.17 - xczh - 初稿
>
> 2016.05.30 - xczh - 修改镜像名为tz-base
>
> 2016.07.06 - xczh - 更新结构

**[Type]** Base Image

本基础镜像基于debian制作，用于某些alpine不能满足的特定情况下。

通常，应该优先考虑使用`tz-base-alpine`镜像作为基础镜像。

------

## Notes

各项配置与`tz-base-alpine`一致。

## Usage

首先编译本镜像，必须使用`configure`生成编译配置，直接使用docker build会失败。

```sh
# 生成编译配置
./configure --name=tz-base-debian --tag=jessie

# 开始编译
make build
```

如果编译成功，通过`docker images`能看到编译完成的镜像。

通过镜像来运行容器：

```sh
# 不指定运行CMD时，将使用run hook来启动
docker run -it --rm registry.op.tiaozhan.com/tz-base-debian:jessie 

# 你也可以覆盖入口进程，以sh为例
docker run -it --rm registry.op.tiaozhan.com/tz-base-debian:jessie /bin/sh

# 测试镜像是否正常工作
docker run --rm registry.op.tiaozhan.com/tz-base-debian:jessie test

# 显示镜像编译版本信息
docker run --rm registry.op.tiaozhan.com/tz-base-debian:jessie version
```