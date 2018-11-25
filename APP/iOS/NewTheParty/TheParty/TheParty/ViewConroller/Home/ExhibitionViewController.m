//
//  ExhibitionViewController.m
//  TheParty
//
//  Created by macmini on 2018/7/31.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExhibitionViewController.h"
#import "ExhibitionTableViewCell.h"
#import "NewsWebViewController.h"
@interface ExhibitionViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *tableView;
    NSMutableArray *dataArr;

}

@end

@implementation ExhibitionViewController

- (void)viewDidLoad {
    [super viewDidLoad];
     self.title = @"云展馆";
    dataArr = [[NSMutableArray alloc] init];
    self.view.backgroundColor =COLOR(255, 255, 255);
    self.edgesForExtendedLayout = UIRectEdgeNone;
    [self ctreatTableView];
    [self createData];
}

- (void)createData{
    [self showHUD:nil];
    WEAKSELF
    [ConnectionRequestMgr GetSessionWithUrl:Cloud parameter:nil successBlock:^(NSDictionary *dict) {
        
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                [dataArr addObject:dict[@"data"][i]];
            }
            [tableView reloadData];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
}

- (UIView *)createHeadView{
    UIView *headView= [[UIView alloc] initWithFrame:CGRectMake(0, 0, 0, 220)];
    headView.backgroundColor = UIColorFromRGBA(0xffffff, 1);
    
    UIImageView *headImageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 180)];
    headImageV.image = [UIImage imageNamed:@"yun_banner"];
    [headView addSubview:headImageV];
    
    UIView *line = [[UIView alloc] initWithFrame:CGRectMake(0, 180, SCREEN_W, 10)];
    line.backgroundColor = COLOR(249, 245, 245);
    [headView addSubview:line];
    
    UIImageView *imageVleft = [[UIImageView alloc] initWithFrame:CGRectMake(16, 198, 23, 21 )];
    imageVleft.image = [UIImage imageNamed:@"home_xingxing"];
    [headView addSubview:imageVleft];
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(CGRectGetMaxX(imageVleft.frame) + 10, 200, 100, 17)];
    titleL.text = @"VR展厅案例";
    titleL.font = FontBold(15);
    titleL.textColor = [UIColor colorWithRed:51/255.0 green:51/255.0 blue:51/255.0 alpha:1];
    [headView addSubview:titleL];

    return headView;
}

- (void)ctreatTableView{
    tableView = [[UITableView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H - 64) style:UITableViewStyleGrouped];
    tableView.backgroundColor = [UIColor whiteColor];
    tableView.delegate = self;
    tableView.separatorStyle = NO;
    tableView.dataSource = self;
    tableView.bounces = NO;
    tableView.showsVerticalScrollIndicator = FALSE;
    tableView.showsHorizontalScrollIndicator = FALSE;
    tableView.tableFooterView = [[UIView alloc] init];
    tableView.tableHeaderView = [self createHeadView];
    [self.view addSubview:tableView];
    [tableView registerClass:[ExhibitionTableViewCell class] forCellReuseIdentifier:@"ExhibitionTableViewCell"];
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return 1;
    
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return dataArr.count;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    ExhibitionTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"ExhibitionTableViewCell"];
    cell.selectionStyle = UITableViewCellSelectionStyleNone;
    [cell.imageV sd_setImageWithURL:[NSURL URLWithString:dataArr[indexPath.section][@"thumb"]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
    cell.titleL.text = dataArr[indexPath.section][@"title"];
    cell.subjectL.text = dataArr[indexPath.section][@"content"];
    cell.RQNum.text = [NSString stringWithFormat:@"%zd",(int)dataArr[indexPath.section][@"visit"]];
    return cell;
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    return 256;
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 5;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    if (section ==0) {
        return 5;
    }else{
        return 0.01;
    }
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    view.backgroundColor = [UIColor whiteColor];
    if (section ==0) {
        view.frame =CGRectMake(0, 0, SCREEN_W, 10);
    }else{
      
    }
  return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 15)];
    view.backgroundColor = [UIColor whiteColor];
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    [[UIHelper sharedSingleton] pushVC:@"NewsWebViewController" vc:self parames:@{@"str":dataArr[indexPath.section][@"path"],@"Titlestr":dataArr[indexPath.section][@"title"]}];
}

@end
