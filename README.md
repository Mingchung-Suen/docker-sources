# 挑战网 Base/Middle Image Repo

挑战网线上环境目前已实现完全虚拟化自动部署，为保障线上服务高效稳定运行，现将部署细节说明如下，请开发同学遵照相关要求执行。

有任何Bug或者不清楚的地方，请直接在该项目“讨论”板块发起issue，运维组同学会及时给予回复说明。

镜像使用文档已转移至Wiki，以下仅供镜像贡献者参考。

镜像的三层继承结构：

Base Image -> Middle Image -> App Image (容器实际运行所用的镜像)

本仓库包含Base和Middle镜像的源码。

### Contact

> 运维邮件组： op@tiaozhan.com
>
> 紧急联系人： 李响 +86 182 9288 6955 （挑战网运维总监）

------

### 镜像使用

先`git clone`本仓库，cd到你需要的镜像目录，阅读对应目录下的README，从源码编译。

编译前，请确保你已经拥有该镜像所依赖的上级镜像，可使用`docker image`查看你的本地镜像。

为了加快速度，编译所需的官方镜像可以从这里获取，定期从官方拉取：

https://mirrors.xjtu.edu.cn/academic/Docker/images/

导入官方镜像，请阅读[README](https://mirrors.xjtu.edu.cn/academic/Docker/images/readme.txt)。