//
//  RankingViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/18.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "RankingViewController.h"
#import "RankCompanyTableViewCell.h"
#import "RankmanTableViewCell.h"
@interface RankingViewController ()<UITableViewDelegate,UITableViewDataSource>
{
    UITableView *tableView;
    NSArray *dataArr;
    UILabel *jifenL;
    UILabel *paiML;
    UIImageView *backBtn;
    UIImageView *UserImageV;
    UILabel *nameL;
    UILabel *companyL;
    UIImageView *jiaoV;
    UIButton *LeftBtn;
    UIButton *RightBtn;
    NSInteger ischoose; // 1是个人 2是公司
    NSInteger isYear; // 1是月 2是年
    NSDictionary *userDic;
    NSString *dateStr;
    UILabel *personL;
    UILabel *paiL;
}

@end

@implementation RankingViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"我的排名";
    ischoose = 1;
    isYear = 1;
    userDic = [[NSDictionary alloc] init];
    self.view.backgroundColor =COLOR(249, 245, 245);
    NSDateFormatter *formatter = [[NSDateFormatter alloc] init];
    [formatter setDateFormat:@"YYYY-MM"];
    NSDate *datenow = [NSDate date];
    dateStr = [formatter stringFromDate:datenow];
    [self creatRightNav];
    [self ctreatTableView];
    [self createPersonData];
}

- (void)creatRightNav{
    UIButton *RightBtn = [UIButton buttonWithType:UIButtonTypeCustom];
    [RightBtn setFrame:CGRectMake(0, 0, 25, 25)];
    [RightBtn setImage:[UIImage imageNamed:@"Integral_date"] forState:UIControlStateNormal];
    [RightBtn addTarget:self action:@selector(RightAction) forControlEvents:UIControlEventTouchUpInside];
    UIBarButtonItem *submitItem = [[UIBarButtonItem alloc] initWithCustomView:RightBtn];
    self.navigationItem.rightBarButtonItem = submitItem;
}

- (void)createPersonData{
        [self showHUD:nil];
        WEAKSELF
        NSString *biz=[NSString stringWithFormat:@"&time=%@&type=%zd",dateStr,isYear];
        [ConnectionRequestMgr GetSessionWithUrl:PersonRank parameter:biz successBlock:^(NSDictionary *dict) {
            [weakSelf hideHUD];
            if ([dict[@"code"] integerValue] == 1) {
                dataArr = [[NSArray alloc] init];
                [UserImageV sd_setImageWithURL:[NSURL URLWithString:dict[@"data"][@"user"][@"face"]] placeholderImage:[UIImage imageNamed:@"me_user"]];
                jifenL.text = [NSString stringWithFormat:@"%@分",dict[@"data"][@"user"][@"total_score"]];
                paiML.text = [NSString stringWithFormat:@"%@",dict[@"data"][@"user"][@"rank"]];
                nameL.text = [NSString stringWithFormat:@"%@",dict[@"data"][@"user"][@"username"]];
                companyL.text = [NSString stringWithFormat:@"%@",dict[@"data"][@"user"][@"company_name"]];
                dataArr = dict[@"data"][@"data"];
                if (dataArr.count == 0) {
                    [weakSelf showError:@"暂无内容"];
                    
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

- (void)createCompanyData{
    [self showHUD:nil];
    WEAKSELF
    NSString *biz=[NSString stringWithFormat:@"&time=%@&type=%zd",dateStr,isYear];
    [ConnectionRequestMgr GetSessionWithUrl:CompanyRank parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            dataArr = [[NSArray alloc] init];
        
            [UserImageV sd_setImageWithURL:[NSURL URLWithString:dict[@"data"][@"user"][@"face"]] placeholderImage:[UIImage imageNamed:@"me_user"]];
            if (isYear ==1) {
            jifenL.text = [NSString stringWithFormat:@"%@分",dict[@"data"][@"user"][@"avg_score"]];
            }else{
                

            jifenL.text = [NSString stringWithFormat:@"%@分",dict[@"data"][@"user"][@"avg_score"]];
            }
           
            paiML.text =[NSString stringWithFormat:@"%@名",dict[@"data"][@"user"][@"rank"]];
            

            nameL.text = [NSString stringWithFormat:@"%@",dict[@"data"][@"user"][@"username"]];
            companyL.text = [NSString stringWithFormat:@"%@",dict[@"data"][@"user"][@"company_name"]];
            dataArr = dict[@"data"][@"data"];
            if (dataArr.count == 0) {
                [weakSelf showError:@"暂无内容"];
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

- (UIView * )createHeadView{
    UIView *Headback = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 224)];
    
    UIView *back = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 130)];
    back.backgroundColor =UIColorFromRGBA(0xE83329, 1);
    [Headback addSubview:back];
    
    UIView *Userback = [[UIView alloc] initWithFrame:CGRectMake((SCREEN_W- 65)/2, 9, 65, 65)];
    Userback.backgroundColor =UIColorFromRGBA(0xffffff, 1);
    Userback.layer.masksToBounds = YES;
    Userback.layer.cornerRadius = 32.5;
    [back addSubview:Userback];
    
    UserImageV = [[UIImageView alloc] initWithFrame:CGRectMake(2, 2, 61, 61)];
    UserImageV.layer.masksToBounds = YES;
    UserImageV.layer.cornerRadius = 30.5;
    [Userback addSubview:UserImageV];
    
    nameL = [[UILabel alloc] initWithFrame:CGRectMake((SCREEN_W- 65)/2 -50, CGRectGetMaxY(Userback.frame) + 9, 165, 15)];
    nameL.text =  @"";
    nameL.font = Font(14);
    nameL.textAlignment = 1;
    nameL.textColor = [UIColor whiteColor];
    [back addSubview:nameL];
    
    companyL = [[UILabel alloc] initWithFrame:CGRectMake(0, CGRectGetMaxY(nameL.frame) + 7, SCREEN_W, 12)];
    companyL.text =  @"";
    companyL.font = Font(12);
    companyL.textAlignment = 1;
    companyL.textColor = UIColorFromRGBA(0xffffff, 0.52);
    [back addSubview:companyL];
    
    backBtn = [[UIImageView alloc] initWithFrame:CGRectMake(0, 130, SCREEN_W, 46)];
    backBtn.image = [UIImage imageNamed:@"Rank_btnBack"];
    backBtn.userInteractionEnabled = YES;
    [Headback addSubview:backBtn];
    
    jiaoV = [[UIImageView alloc] initWithFrame:CGRectMake((SCREEN_W/2 -13)/2, 39, 13, 7)];
    jiaoV.image = [UIImage imageNamed:@"Rank_jiao"];
    [backBtn addSubview:jiaoV];
    
    NSArray *PaiArr = @[@"个人排行",@"公司排行"];
    for (int i = 0; i<2; i++) {
        UILabel *Lab = [[UILabel alloc] initWithFrame:CGRectMake(0 + i*SCREEN_W/2, 47, SCREEN_W/2, 14)];
        Lab.text =  @"";
        Lab.font = Font(14);
        Lab.textAlignment = 1;
        Lab.textColor = UIColorFromRGBA(0xF6F3F3, 1);
        [back addSubview:Lab];
        
        UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(0 + i*SCREEN_W/2, CGRectGetMaxY(Lab.frame) + 14, SCREEN_W/2, 12)];
        titleL.font = Font(12);
        titleL.textAlignment = 1;
        titleL.textColor = UIColorFromRGBA(0xF6F3F3, 1);
        [back addSubview:titleL];
        
        UIButton *PaiBtn = [UIButton buttonWithType:UIButtonTypeCustom];
        PaiBtn.frame = CGRectMake(i*SCREEN_W/2, 0, SCREEN_W/2, 46);
        [PaiBtn setTitle:PaiArr[i] forState:UIControlStateNormal];
        PaiBtn.titleLabel.font = Font(14);
        [PaiBtn addTarget:self action:@selector(choosePaiMAction:) forControlEvents:UIControlEventTouchUpInside];
        PaiBtn.tag = 200 + i;
        [backBtn addSubview:PaiBtn];
        if (i ==0) {
            titleL.text = @"个人积分";
            jifenL = Lab;
            personL = titleL;
            [PaiBtn setTitleColor:UIColorFromRGBA(0xFFFFFF, 1) forState:UIControlStateNormal];
        }else{
            titleL.text = @"个人排名";
            paiML = Lab;
            paiL = titleL;
            [PaiBtn setTitleColor:UIColorFromRGBA(0xFFFFFF, 0.52) forState:UIControlStateNormal];
        }
    }
    
    LeftBtn = [UIButton buttonWithType:UIButtonTypeCustom];
    LeftBtn.frame = CGRectMake(SCREEN_W/2 -121, CGRectGetMaxY(backBtn.frame) + 10, 121, 28);
    
    UIBezierPath *maskPath = [UIBezierPath bezierPathWithRoundedRect:LeftBtn.bounds byRoundingCorners:(UIRectCornerTopLeft | UIRectCornerBottomLeft) cornerRadii:CGSizeMake(14,14)];//圆角大小
    CAShapeLayer *maskLayer = [[CAShapeLayer alloc] init];
    maskLayer.frame = LeftBtn.bounds;
    maskLayer.path = maskPath.CGPath;
    LeftBtn.layer.mask = maskLayer;
    [LeftBtn setTitle:@"月 榜" forState:UIControlStateNormal];
    LeftBtn.titleLabel.font = Font(12);
    [LeftBtn addTarget:self action:@selector(chooseBanAction:) forControlEvents:UIControlEventTouchUpInside];
    LeftBtn.backgroundColor = UIColorFromRGBA(0xE83329, 1);
    LeftBtn.tag = 300;
    [Headback addSubview:LeftBtn];
    
    RightBtn = [UIButton buttonWithType:UIButtonTypeCustom];
    RightBtn.frame = CGRectMake(SCREEN_W/2,CGRectGetMaxY(backBtn.frame) + 10, 121, 28);
    UIBezierPath *maskPath1 = [UIBezierPath bezierPathWithRoundedRect:RightBtn.bounds byRoundingCorners:(UIRectCornerTopRight | UIRectCornerBottomRight) cornerRadii:CGSizeMake(14,14)];//圆角大小
    CAShapeLayer *maskLayer1 = [[CAShapeLayer alloc] init];
    maskLayer1.frame = RightBtn.bounds;
    maskLayer1.path = maskPath1.CGPath;
    RightBtn.layer.mask = maskLayer1;
    
    [RightBtn setTitle:@"总 榜" forState:UIControlStateNormal];
    RightBtn.titleLabel.font = Font(12);
    [RightBtn addTarget:self action:@selector(chooseBanAction:) forControlEvents:UIControlEventTouchUpInside];
    RightBtn.backgroundColor = UIColorFromRGBA(0xE83329, 0.41);
    RightBtn.tag = 301;
    [Headback addSubview:RightBtn];
    return Headback;
}

- (void)ctreatTableView{
    
    tableView = [[UITableView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H -64) style:UITableViewStylePlain];
    tableView.delegate = self;
    tableView.dataSource = self;
    tableView.bounces = NO;
    tableView.showsVerticalScrollIndicator = FALSE;
    tableView.showsHorizontalScrollIndicator = FALSE;
    tableView.backgroundColor =COLOR(249, 245, 245);
    tableView.tableHeaderView = [self createHeadView];
    [self.view addSubview:tableView];
    
    [tableView registerNib:[UINib nibWithNibName:@"RankCompanyTableViewCell" bundle:nil] forCellReuseIdentifier:@"RankCompanyTableViewCell"];
    [tableView registerNib:[UINib nibWithNibName:@"RankmanTableViewCell" bundle:nil] forCellReuseIdentifier:@"RankmanTableViewCell"];
}

- (void)RightAction{
    WSDatePickerView *datepicker = [[WSDatePickerView alloc] initWithDateStyle:DateStyleShowYearMonth CompleteBlock:^(NSDate *selectDate) {
        dateStr = [selectDate stringWithFormat:@"yyyy-MM"];
        if (ischoose == 1) {
            [self createPersonData];
        }else{
            [self createCompanyData];
        }
    }];
    [datepicker show];
    
}


- (void)choosePaiMAction:(UIButton *)sender{
    UIButton *btn1 = [backBtn  viewWithTag:200];
    UIButton *btn2 = [backBtn  viewWithTag:201];
    if (sender.tag == 200) {
        [btn1 setTitleColor:UIColorFromRGBA(0xFFFFFF, 1) forState:UIControlStateNormal];
        [btn2 setTitleColor:UIColorFromRGBA(0xFFFFFF, 0.52) forState:UIControlStateNormal];
        ischoose = 1;
        personL.text = @"个人积分";
        paiL.text = @"个人排行";
    }else{
        personL.text = @"公司积分";
        paiL.text = @"公司排行";
        ischoose = 2;
        [btn2 setTitleColor:UIColorFromRGBA(0xFFFFFF, 1) forState:UIControlStateNormal];
        [btn1 setTitleColor:UIColorFromRGBA(0xFFFFFF, 0.52) forState:UIControlStateNormal];
    }
    jiaoV.frame = CGRectMake(SCREEN_W/2 *(sender.tag -200) + (SCREEN_W/2 -13)/2, 39, 13, 7);
    if (ischoose == 1) {
        [self createPersonData];
    }else{
        [self createCompanyData];
    }
}

- (void)chooseBanAction:(UIButton *)sender{
    
    if (sender.tag ==300) {
        LeftBtn.backgroundColor = UIColorFromRGBA(0xE83329, 1);
        RightBtn.backgroundColor = UIColorFromRGBA(0xE83329, 0.41);
        isYear = 1;
    }else{
        RightBtn.backgroundColor = UIColorFromRGBA(0xE83329, 1);
        LeftBtn.backgroundColor = UIColorFromRGBA(0xE83329, 0.41);
        isYear = 2;
    }
    if (ischoose == 1) {
        [self createPersonData];
    }else{
        [self createCompanyData];
    }
}

#pragma mark UItableViewDelegate
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return dataArr.count;
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView{
    return 1;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    NSArray *imageVArr = @[@"Rank_one",@"Rank_two",@"Rank_three"];
    if (ischoose == 1) {
       RankmanTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"RankmanTableViewCell"];
        cell.selectionStyle = UITableViewCellSelectionStyleNone;
        if (indexPath.row <3) {
            cell.leftImageV.image = [UIImage imageNamed:imageVArr[indexPath.row]];
            cell.numL.text = @"";
            cell.jifenL.textColor = UIColorFromRGBA(0xED5B53, 1);
        }else {
            cell.numL.text = [NSString stringWithFormat:@"%zd",indexPath.row + 1];
            cell.leftImageV.image = nil;
            cell.jifenL.textColor = UIColorFromRGBA(0x474646, 1);
        }
        [cell.UserImageV sd_setImageWithURL:[NSURL URLWithString:[NSString replaceStringNull:dataArr[indexPath.row][@"face"]]] placeholderImage:[UIImage imageNamed:@"me_user"]];
        cell.titleL.text = [NSString replaceStringNull:dataArr[indexPath.row][@"company"]];
        cell.nameL.text = [NSString replaceStringNull:dataArr[indexPath.row][@"username"]];
        cell.jifenL.text = [NSString stringWithFormat:@"%@", dataArr[indexPath.row][@"total_score"]];
        return cell;
    }else{
        RankCompanyTableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"RankCompanyTableViewCell"];
        cell.selectionStyle = UITableViewCellSelectionStyleNone;
        if (indexPath.row <3) {
            cell.leftImageV.image = [UIImage imageNamed:imageVArr[indexPath.row]];
            cell.numL.text = @"";
            cell.jifenL.textColor = UIColorFromRGBA(0xED5B53, 1);
        }else {
            cell.numL.text = [NSString stringWithFormat:@"%zd",indexPath.row + 1];
            cell.leftImageV.image = nil;
            cell.jifenL.textColor = UIColorFromRGBA(0x474646, 1);
        }
        cell.titleL.text = dataArr[indexPath.row][@"company_name"];
        cell.jifenL.text = [NSString stringWithFormat:@"%@",dataArr[indexPath.row][@"avg_score"]];
        return cell;
    }
}

- (CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    if (ischoose == 1) {
         return 65;
    }else{
         return 55;
    }
}

- (CGFloat)tableView:(UITableView *)tableView heightForFooterInSection:(NSInteger)section{
    return 0.01;
}

- (CGFloat)tableView:(UITableView *)tableView heightForHeaderInSection:(NSInteger)section{
    return 0.01;
}

- (UIView *)tableView:(UITableView *)tableView viewForHeaderInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    view.backgroundColor = COLOR(249, 245, 245);
    return view;
}

- (UIView *)tableView:(UITableView *)tableView viewForFooterInSection:(NSInteger)section{
    UIView *view = [[UIView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.1)];
    view.backgroundColor = COLOR(249, 245, 245);
    return view;
}

- (void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    
}


@end
