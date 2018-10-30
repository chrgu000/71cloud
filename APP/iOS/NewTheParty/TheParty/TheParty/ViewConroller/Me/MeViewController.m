//
//  MeViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/6.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "MeViewController.h"
#import "MeTableViewCell.h"
#import "FacebookViewController.h"
#import "Me_messageViewController.h"
#import "Me_SettingViewController.h"
#import "Me_IntegralViewController.h"
#import "Me_InformationViewController.h"
#import "RankingViewController.h"
#import <UMSocialCore/UMSocialCore.h>


@interface MeViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *mainTable;
    NSString *clearName;
    NSDictionary *Datadic;
    ThePartySingTon *instance;
}

@end

@implementation MeViewController


- (void)viewWillAppear:(BOOL)animated {
    [self creatData];
    [super viewWillAppear:animated];
}

- (void)viewWillDisappear:(BOOL)animated {
    
    [super viewWillDisappear:animated];
}


- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    Datadic = [[NSDictionary alloc] init];
    self.title = @"个人中心";
    self.view.backgroundColor = [UIColor whiteColor];
    instance = [ThePartySingTon SharedInstance];
    [self creatData];
    
}

- (void)creatData{
    [self showHUD:nil];
    WEAKSELF
    [ConnectionRequestMgr GetSessionWithUrl:USER parameter:nil successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            Datadic = dict[@"data"];
            [self creatUI];
            [self creatRightNav];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];

}

- (void)creatRightNav{
    UIButton *RightBtn = [UIButton buttonWithType:UIButtonTypeCustom];
    [RightBtn setFrame:CGRectMake(0, 0, 25, 25)];
    [RightBtn setImage:[UIImage imageNamed:@"me_msg"] forState:UIControlStateNormal];
    [RightBtn addTarget:self action:@selector(RightAction) forControlEvents:UIControlEventTouchUpInside];
    UIBarButtonItem *submitItem = [[UIBarButtonItem alloc] initWithCustomView:RightBtn];
    self.navigationItem.rightBarButtonItem = submitItem;
    
}
    
- (void)creatUI{

    mainTable = [[UITableView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H - 64) style:UITableViewStylePlain];
    mainTable.backgroundColor = COLOR(249, 245, 245);
    mainTable.dataSource = self;
    mainTable.delegate = self;
    mainTable.bounces = NO;
    mainTable.tableFooterView = [[UIView alloc] init];
    mainTable.tableHeaderView = [self creatHeadView];
    [self.view addSubview:mainTable];
    [mainTable registerNib:[UINib nibWithNibName:@"MeTableViewCell" bundle:nil] forCellReuseIdentifier:@"MeTableViewCell"];
    
//    UIButton *button = [UIButton buttonWithType:UIButtonTypeCustom];
//    button.frame = CGRectMake(0, SCREEN_H - 36 - 64, SCREEN_W, 36);
//    button.backgroundColor = [UIColor redColor];
//    [button setTitle:@"退出登录" forState:UIControlStateNormal];
//    [button setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
//    [button addTarget:self action:@selector(outLogin) forControlEvents:UIControlEventTouchUpInside];
//    [self.view addSubview:button];
    
}

- (UIView *)creatHeadView{
    UIView *backV = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 250)];
    backV.backgroundColor = [UIColor whiteColor];
    
    UIImageView *iamgeTop = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 105)];
    iamgeTop.image = [UIImage imageNamed:@"me_heard"];
    [backV addSubview:iamgeTop];
    
    UIImageView *userBack = [[UIImageView alloc] initWithFrame:CGRectMake((SCREEN_W -85)/2, 38, 85, 85)];
    userBack.backgroundColor = [UIColor whiteColor];
    userBack.layer.masksToBounds = YES;
    userBack.layer.cornerRadius = 42.5;
    [backV addSubview:userBack];
    
    UIImageView *userV = [[UIImageView alloc] initWithFrame:CGRectMake(3, 3, 79, 79)];
    [userV sd_setImageWithURL:[NSURL URLWithString:Datadic[@"user"][@"face"]] placeholderImage:[UIImage imageNamed:@"me_user"]];
    userV.layer.masksToBounds = YES;
    userV.layer.cornerRadius = 39.5;
    [userBack addSubview:userV];
    
    UILabel *phoneL = [[UILabel alloc] initWithFrame:CGRectMake(0, CGRectGetMaxY(userBack.frame) + 10, SCREEN_W, 20)];
    phoneL.text = [NSString replaceStringNull:Datadic[@"user"][@"username"]];
    phoneL.textColor = UIColorFromRGBA(0x7e7d7d, 1);
    phoneL.font = Font(14);
    phoneL.textAlignment = 1;
    [backV addSubview:phoneL];
    
    NSArray *Arr= @[@"本月积分",@"本月排名"];
    for (int i = 0; i<2; i++) {
        UIButton *btn = [UIButton buttonWithType:UIButtonTypeCustom];
        btn.frame = CGRectMake(SCREEN_W/2 *i, CGRectGetMaxY(phoneL.frame) + 20, SCREEN_W/2, 250 -(CGRectGetMaxY(phoneL.frame) + 10));
        [btn addTarget:self action:@selector(gotoJinfen:) forControlEvents:UIControlEventTouchUpInside];
        btn.tag = i;
        [backV addSubview:btn];
        
        UILabel *jifenL = [[UILabel alloc] initWithFrame:CGRectMake(0, 10, SCREEN_W/2, 15)];
        if ( i == 0) {
             jifenL.text = [NSString stringWithFormat:@"%@分", [NSString replaceStringNull:[NSString stringWithFormat:@"%@",Datadic[@"user"][@"total_score"]]]];
        }else{
            jifenL.text = [NSString stringWithFormat:@"%@名", [NSString replaceStringNull:[NSString stringWithFormat:@"%@",Datadic[@"user"][@"rank"]]]];
        }
        jifenL.textColor = UIColorFromRGBA(0xE83329, 1);
        jifenL.font = Font(14);
        jifenL.textAlignment = 1;
        [btn addSubview:jifenL];
        
        UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(0, CGRectGetMaxY(jifenL.frame) + 12, SCREEN_W/2, 12)];
        titleL.text = Arr[i];
        titleL.textColor = UIColorFromRGBA(0x888787, 1);
        titleL.font = Font(12);
        titleL.textAlignment = 1;
        [btn addSubview:titleL];
    }
    
    return backV;
    
}

- (void)RightAction{
    NSLog(@"right");
    
    [[UIHelper sharedSingleton] pushVC:@"Me_InformationViewController" vc:self parames:@{@"DataDic":Datadic}];
    
}

- (void)gotoJinfen:(UIButton *)sender{

    if (sender.tag == 0) {
       [[UIHelper sharedSingleton] pushVC:@"Me_IntegralViewController" vc:self parames:nil];
    }else{
       [[UIHelper sharedSingleton] pushVC:@"RankingViewController" vc:self parames:nil];
    }
}


#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    if ([[UMSocialManager defaultManager] isInstall:1]) {
    return 5;
    }else{
    return 4;
    }
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return 1;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
//    NSArray *titleArr = @[@"消息提醒",@"意见反馈",@"关于我们",@"系统设置"];
    NSArray *titleArr = @[@"消息提醒",@"意见反馈",@"系统设置",@"授权登录"];
//    NSArray *imageArr = @[@"me_message",@"me_face",@"me_me",@"me_setting"];
    NSArray *imageArr = @[@"me_message",@"me_face",@"me_setting",@""];
    
    MeTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"MeTableViewCell"];
    cell.selectionStyle = UITableViewCellSelectionStyleNone;
    cell.titleL.text = titleArr[indexPath.row];
    cell.imageV.image = [UIImage imageNamed:imageArr[indexPath.row]];
    cell.imageV.contentMode = UIViewContentModeScaleAspectFit;
    if (indexPath.row == 0) {
        if ([Datadic[@"msg_num"] integerValue] == 0) {
            cell.cleanL.backgroundColor = [UIColor whiteColor];
        }else{
        cell.cleanL.text = [NSString replaceStringNull:[NSString stringWithFormat:@"%@",Datadic[@"msg_num"]]];
        cell.cleanL.backgroundColor = UIColorFromRGBA(0xfe6e67, 1);
        }
    }else{
        cell.cleanL.backgroundColor = [UIColor whiteColor];
    }
    cell.preservesSuperviewLayoutMargins = NO;
    cell.separatorInset = UIEdgeInsetsZero;
    cell.layoutMargins = UIEdgeInsetsZero;
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 52;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 15;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 15)];
    view.backgroundColor = COLOR(249, 245, 245);
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
   
        if (indexPath.row == 0) {
             [[UIHelper sharedSingleton] pushVC:@"Me_messageViewController" vc:self parames:nil];
        }else if(indexPath.row == 1){
             [[UIHelper sharedSingleton] pushVC:@"FacebookViewController" vc:self parames:nil];
        }
//        else if(indexPath.row == 2){
//             [[UIHelper sharedSingleton] pushVC:@"" vc:self parames:nil];
//        }
        else if(indexPath.row ==2){
             [[UIHelper sharedSingleton] pushVC:@"Me_SettingViewController" vc:self parames:nil];
           
        }else{
//            if(instance.user)  {
//
//            }
        }
}

- (void)wenxiLogo{

    __weak MeViewController *meV = self;

    //6.1版本已经修正了getUserInfoWithPlatform，每次获得用户都需要跳转授权
    //如果不需要每次跳转，可以查看[UMSocialGlobal shareInstance].isClearCacheWhenGetUserInfo,来设置
    //[[UMSocialManager defaultManager] cancelAuthWithPlatform:self.authInfo.platform completion:^(id result, NSError *error) {
    [UMSocialGlobal shareInstance].isClearCacheWhenGetUserInfo = YES;
    [[UMSocialManager defaultManager] getUserInfoWithPlatform:1  currentViewController:self completion:^(id result, NSError *error) {
        NSString *message = nil;
        if (error) {
            message = [NSString stringWithFormat:@"Get info fail:\n%@", error];
            UMSocialLogInfo(@"Get info fail with error %@",error);
        }else{
            if ([result isKindOfClass:[UMSocialUserInfoResponse class]]) {
                
                UMSocialUserInfoResponse *resp = result;
                message = [meV authInfoString:resp];
                NSLog(@"%@",message);
                
//                WEAKSELF
                //                [weakSelf showHUD:nil];
                //                NSString *para = formatString(@"&unionid=%@&nickname=%@&iconurl=%@",resp.unionId,resp.name,resp.iconurl);
                //                NSLog(@"%@",para);
                //                [ConnectionRequestMgr PostSessionWithUrl:@"appweixinlogin" parameter:para successBlock:^(NSDictionary *dict) {
                //                    [weakSelf hideHUD];
                //                    if ([dict[@"code"] isEqualToString:@"0000"]) {
                //
                //                    }else{
                ////                        [weakSelf showError:[NSString isCodeMessage:dict[@"code"]]];
                //                    }
                //                } failBlock:^(NSString *errorStr) {
                //                    [weakSelf hideHUD];
                //                    [weakSelf showError:errorStr];
                //                }];
                //
                //
            }else{
                message = @"Get info fail";
            }
        }
        
    }];
}

- (NSString *)authInfoString:(UMSocialUserInfoResponse *)resp
{
    NSMutableString *string = [NSMutableString new];
    if (resp.uid) {
        [string appendFormat:@"uid = %@\n", resp.uid];
    }
    if (resp.openid) {
        [string appendFormat:@"openid = %@\n", resp.openid];
    }
    if (resp.unionId) {
        [string appendFormat:@"unionId = %@\n", resp.unionId];
    }
    if (resp.usid) {
        [string appendFormat:@"usid = %@\n", resp.usid];
    }
    if (resp.accessToken) {
        [string appendFormat:@"accessToken = %@\n", resp.accessToken];
    }
    if (resp.refreshToken) {
        [string appendFormat:@"refreshToken = %@\n", resp.refreshToken];
    }
    if (resp.expiration) {
        [string appendFormat:@"expiration = %@\n", resp.expiration];
    }
    if (resp.name) {
        [string appendFormat:@"name = %@\n", resp.name];
    }
    if (resp.iconurl) {
        [string appendFormat:@"iconurl = %@\n", resp.iconurl];
    }
    if (resp.unionGender) {
        [string appendFormat:@"gender = %@\n", resp.unionGender];
    }
    return string;
}




- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
