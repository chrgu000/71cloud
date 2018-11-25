//
//  ExamineStatusViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/11/2.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ExamineStatusViewController.h"

@interface ExamineStatusViewController ()
{
    UIScrollView *mainScrollView;
    
}
@end

@implementation ExamineStatusViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"答题状态";
    self.view.backgroundColor = COLOR(245, 245, 245);
    [self createUI];
    [self createDownView];
}



- (void)createUI{
    
    mainScrollView = [[UIScrollView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H -44)];
    mainScrollView.userInteractionEnabled =YES;
    mainScrollView.backgroundColor =COLOR(245, 245, 245);
    mainScrollView.showsVerticalScrollIndicator = FALSE;
    mainScrollView.showsHorizontalScrollIndicator = FALSE;
    [self.view addSubview:mainScrollView];
    
    UIView *backV = [[UIView alloc] initWithFrame:CGRectMake(16, 56, SCREEN_W-32, (SCREEN_W-32)/5 *6 +20 +20)];
    backV.backgroundColor = [UIColor whiteColor];
    [mainScrollView addSubview:backV];
    
    int k;
    if ([self.dataArr count]%5 == 0) {
        k = [self.dataArr count]/5;
       
    }else{
        k = [self.dataArr count]/5 + 1;
       
    }
   
    for (int i = 0; i<k; i++) {
        for (int j = 0; j<5; j++) {
            
            if (j+i*5 +1 > [self.dataArr count]) {
                
            }else{
                UIButton *button = [UIButton buttonWithType:UIButtonTypeCustom];
                button.frame = CGRectMake(j*(SCREEN_W-32)/5, 20 +i*(SCREEN_W-32)/5, (SCREEN_W-32)/5, (SCREEN_W-32)/5);
                //            button.backgroundColor = COLOR(230, 230, 230);
                //            [button setTitle:[NSString stringWithFormat:@"%zd",j+i*5 +1] forState:UIControlStateNormal];
                //            [button setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
                //            button.titleLabel.font = Font(16);
                [backV addSubview:button];
                
                UILabel *numL = [[UILabel alloc] initWithFrame:CGRectMake(((SCREEN_W-32)/5 -40)/2, ((SCREEN_W-32)/5 -40)/2, 40, 40)];
                numL.layer.masksToBounds = YES;
                numL.layer.cornerRadius = 20;
                if ([self.dataArr[j+i*5][@"chooseanser"] isEqualToString:@"0"]) {
                     numL.backgroundColor = COLOR(230, 230, 230);
                }else if ([self.dataArr[j+i*5][@"chooseanser"]  isEqualToString:self.dataArr[j+i*5][@"ranswer"]]){
                    numL.backgroundColor = COLOR(0, 204, 118);
                }else{
                     numL.backgroundColor = [UIColor redColor];
                }
                numL.text = [NSString stringWithFormat:@"%zd",j+i*5 +1];
                numL.textAlignment = 1;
                numL.textColor =[UIColor whiteColor];
                numL.font = Font(16);
                [button addSubview:numL];
            }
        }
    }
    backV.frame = CGRectMake(16, 56, SCREEN_W-32, (SCREEN_W-32)/5 *k +20 +20);
    mainScrollView.contentSize = CGSizeMake(0, CGRectGetMaxY(backV.frame) + 100);
    
}

- (void)createDownView{
    
    UIView *downView = [[UIView alloc] initWithFrame:CGRectMake(0, SCREEN_H - 44 -64, SCREEN_W, 44)];
    downView.backgroundColor = [UIColor whiteColor];
    [self.view addSubview:downView];
    
    UILabel *line  =[[UILabel alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 0.5)];
    line.backgroundColor = COLOR(230, 230, 230);
    [downView addSubview:line];
    
    UIButton *statusB = [UIButton buttonWithType:UIButtonTypeCustom];
    statusB.frame = CGRectMake((SCREEN_W -145)/2, 4, 145, 36);
    [statusB setTitle:@"继续答题" forState:UIControlStateNormal];
    statusB.layer.masksToBounds = YES;
    statusB.layer.cornerRadius = 5;
    statusB.backgroundColor = [UIColor redColor];
    [statusB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [statusB addTarget:self action:@selector(actionBack) forControlEvents:UIControlEventTouchUpInside];
    [downView addSubview:statusB];
    
}

- (void)actionBack{
    
    [self.navigationController popViewControllerAnimated:YES];
    
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
