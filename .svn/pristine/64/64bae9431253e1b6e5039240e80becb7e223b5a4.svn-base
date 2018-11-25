//
//  ExamineDetailViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/25.
//  Copyright © 2018年 macmini. All rights reserved.
//
#import "Find_QuestionNewCollectionViewCell.h"
#import "Find_QuestionQuestionTableViewCell.h"
#import "Find_QuestionAnswerTableViewCell.h"
#import "Find_QuesstionHeardTableViewCell.h"
#import "Find_QuesstionNextTableViewCell.h"
#import "Find_QuesstionSureTableViewCell.h"

@implementation Find_QuestionNewCollectionViewCell

-(instancetype)initWithFrame:(CGRect)frame{
    if (self == [super initWithFrame:frame]) {
//        ZXLog(@"%@",NSStringFromCGRect(frame));
//        self.contentView.backgroundColor = UIColorFromRGBHex(0xf15353);
        self.isSure = NO;
        [self setUI];
    }
    return self;
}

-(void)setDataSource:(NSMutableDictionary *)dataSource{
    _dataSource = dataSource;
    _answerArray = @[].mutableCopy;
    
    _answerArray = [NSMutableArray arrayWithArray:_dataSource[@"qchoose"]];
    
    if (_bodyView) {
        [_bodyView reloadData];
    }
    else
        [self setUI];
}

//

-(void)setUI{
    
    _bodyView = [[UITableView alloc]initWithFrame:CGRectMake(0, 0, SCREEN_W, self.frame.size.height) style:UITableViewStylePlain];
    _bodyView.delegate = self;
    _bodyView.dataSource = self;
    _bodyView.backgroundColor = COLOR(245, 245, 245);
    _bodyView.tableFooterView = [UIView new];
    _bodyView.separatorStyle = UITableViewCellSeparatorStyleNone;
    _bodyView.bounces = NO;
    _bodyView.showsVerticalScrollIndicator = FALSE;
    _bodyView.showsHorizontalScrollIndicator = FALSE;
    [_bodyView registerClass:[Find_QuesstionHeardTableViewCell class] forCellReuseIdentifier:@"Find_QuesstionHeardTableViewCell"];
     [_bodyView registerClass:[Find_QuesstionNextTableViewCell class] forCellReuseIdentifier:@"Find_QuesstionNextTableViewCell"];
    [_bodyView registerClass:[Find_QuesstionSureTableViewCell class] forCellReuseIdentifier:@"Find_QuesstionSureTableViewCell"];
    [self addSubview:_bodyView];
    
}

-(NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return !self.isSure ? _answerArray.count + 2 : _answerArray.count + 3;
}

-(CGFloat)tableView:(UITableView *)tableView heightForRowAtIndexPath:(NSIndexPath *)indexPath{
    if (indexPath.row == 0) {
        return [self getSpaceLabelHeight:_dataSource[@"qcontent"] withWidh:SCREEN_W -32] + 30;
    }
    else if (indexPath.row == _answerArray.count +1){
        return 80;
    }else if (indexPath.row == _answerArray.count +2){
         return [self getSureLabelHeight:_dataSource[@"sure"] withWidh:SCREEN_W -32-22] + 140;
    }
    else{
        return UITableViewAutomaticDimension;
    }
}
-(UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{

    /// 正确答案提示
    if (indexPath.row == _answerArray.count + 2){
        Find_QuesstionSureTableViewCell * tip = [tableView dequeueReusableCellWithIdentifier:@"Find_QuesstionSureTableViewCell"];
        tip.selectionStyle = UITableViewCellSelectionStyleNone;
        tip.backgroundColor = COLOR(245, 245, 245);
        [tip setDic:@{@"ransure":_dataSource[@"ranswer"],@"sureSubject":_dataSource[@"sure"]}];
        return tip;
    }
    else{
    if (indexPath.row == 0) {
        Find_QuesstionHeardTableViewCell * question = [tableView dequeueReusableCellWithIdentifier:@"Find_QuesstionHeardTableViewCell"];
        [question setStr:_dataSource[@"qcontent"]];
        question.selectionStyle = UITableViewCellSelectionStyleNone;
        return question;
    }
    else if(indexPath.row ==_answerArray.count +1){
        Find_QuesstionNextTableViewCell *Cell = [tableView dequeueReusableCellWithIdentifier:@"Find_QuesstionNextTableViewCell"];
        [Cell.nextB addTarget:self action:@selector(NextAction:) forControlEvents:UIControlEventTouchUpInside];
        Cell.backgroundColor = COLOR(247, 247, 247);
        Cell.selectionStyle = UITableViewCellSelectionStyleNone;
        self.nextB = Cell.nextB;
        if (self.NextT == 1) {
            [Cell.nextB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
            [Cell.nextB setBackgroundColor:[UIColor redColor]];
             [Cell.nextB setTitle:@"确定" forState:UIControlStateNormal];
             Cell.nextB.enabled = YES;
        }else if (self.NextT == 2){
            [Cell.nextB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
            [Cell.nextB setBackgroundColor:[UIColor redColor]];
            if ([_dataSource[@"lastTime"] isEqualToString:@"1"]) {
                 [Cell.nextB setTitle:@"提交" forState:UIControlStateNormal];
            }else{
                 [Cell.nextB setTitle:@"下一题" forState:UIControlStateNormal];
            }
           
            Cell.nextB.enabled = YES;
        }else{
            [Cell.nextB setTitleColor:[UIColor redColor] forState:UIControlStateNormal];
            [Cell.nextB setBackgroundColor:COLOR(247, 247, 247)];
            [Cell.nextB setTitle:@"确定" forState:UIControlStateNormal];
            Cell.nextB.enabled = NO;
        }
        return Cell;
    }
    else{
        Find_QuestionAnswerTableViewCell * answer = [[Find_QuestionAnswerTableViewCell alloc]initWithStyle:UITableViewCellStyleDefault reuseIdentifier:@"Find_QuestionAnswerTableViewCell"];
        /// 正确答案
//        if (indexPath.row == _answerArray.count + 3) {
//            for(NSDictionary * dic in _answerArray){
//                if ([dic[@"dir"] isEqualToString:_dataSource[@"ranswer"]]) {
//                    answer.title.text = dic[@"str"];
//                    answer.type = [self getType:dic];
//                }}
//        }
//        else{
            NSDictionary * dic = _answerArray[indexPath.row - 1];
            answer.title.text = dic[@"str"];
            answer.type = [self getChooseType:dic];
//        }
        answer.selectionStyle = UITableViewCellSelectionStyleNone;
        return answer;
    }
    }
}

-(void)tableView:(UITableView *)tableView didSelectRowAtIndexPath:(NSIndexPath *)indexPath{
    if (self.isSure) {
        
    }else{
        if (indexPath.row < 1 || indexPath.row > _answerArray.count + 1){
        
        }else if (indexPath.row == _answerArray.count+1){
        
        }else{
            self.NextT = 0;
            self.nextB.enabled = NO;
            [self.nextB setTitleColor:[UIColor redColor] forState:UIControlStateNormal];
            self.nextB.backgroundColor = COLOR(247, 247, 247);
            NSDictionary * dic = _answerArray[indexPath.row - 1];
            NSString * str = dic[@"dir"];
            NSMutableDictionary * mdic = [NSMutableDictionary dictionaryWithDictionary:_dataSource];
            [mdic setValue:str forKey:@"chooseanser"];
            [self.bodyView reloadData];
            self.clickAnswerBlcok(mdic);
        }
    }
}

-(answerType)getType:(NSDictionary *)dic{
    if ([dic[@"dir"] isEqualToString:@"A"]) {
        return answerRightA;
    }
    else if ([dic[@"dir"] isEqualToString:@"B"]) {
        return answerRightB;
    }
    else if ([dic[@"dir"] isEqualToString:@"C"]) {
        return answerRightC;
    }
    else {
        return answerRightD;
    }
}

-(answerType)getChooseType:(NSDictionary *)dic{
    /// 如果还没有选择
    if (!self.isSure) {
        if ([_dataSource[@"chooseanser"] isEqualToString:@"0"]) {
            if ([dic[@"dir"] isEqualToString:@"A"]) {
                return answerDefaultA;
            }
            else if ([dic[@"dir"] isEqualToString:@"B"]) {
                return answerDefaultB;
            }
            else if ([dic[@"dir"] isEqualToString:@"C"]) {
                return answerDefaultC;
            }
            else {
                return answerDefaultD;
            }
        }
        else{
            self.NextT = 1;
            if ([dic[@"dir"] isEqualToString:_dataSource[@"chooseanser"]]){
                if ([dic[@"dir"] isEqualToString:@"A"]) {
                    return answerRightA;
                }
                else if ([dic[@"dir"] isEqualToString:@"B"]) {
                    return answerRightB;
                }
                else if ([dic[@"dir"] isEqualToString:@"C"]) {
                    return answerRightC;
                }
                else {
                    return answerRightD;
                }
            }
            // 其他答案
            else{
                if ([dic[@"dir"] isEqualToString:@"A"]) {
                    return answerDefaultA;
                }
                else if ([dic[@"dir"] isEqualToString:@"B"]) {
                    return answerDefaultB;
                }
                else if ([dic[@"dir"] isEqualToString:@"C"]) {
                    return answerDefaultC;
                }
                else {
                    return answerDefaultD;
                }
            }
        }}
    else{
        if (![_dataSource[@"chooseanser"] isEqualToString:_dataSource[@"ranswer"]]) {
            if ([dic[@"dir"] isEqualToString:_dataSource[@"chooseanser"]]) {
                if ([dic[@"dir"] isEqualToString:@"A"]) {
                    return answerErrorA;
                }
                else if ([dic[@"dir"] isEqualToString:@"B"]) {
                    return answerErrorB;
                }
                else if ([dic[@"dir"] isEqualToString:@"C"]) {
                    return answerErrorC;
                }
                else {
                    return answerErrorD;
                }
            }else{
                if ([dic[@"dir"] isEqualToString:@"A"]) {
                    return answerDefaultA;
                }
                else if ([dic[@"dir"] isEqualToString:@"B"]) {
                    return answerDefaultB;
                }
                else if ([dic[@"dir"] isEqualToString:@"C"]) {
                    return answerDefaultC;
                }
                else {
                    return answerDefaultD;
                }
            }
        }else{
            if ([dic[@"dir"] isEqualToString:_dataSource[@"chooseanser"]]){
                if ([dic[@"dir"] isEqualToString:@"A"]) {
                    return answerRightA;
                }
                else if ([dic[@"dir"] isEqualToString:@"B"]) {
                    return answerRightB;
                }
                else if ([dic[@"dir"] isEqualToString:@"C"]) {
                    return answerRightC;
                }
                else {
                    return answerRightD;
                }
            }
            // 其他答案
            else{
                if ([dic[@"dir"] isEqualToString:@"A"]) {
                    return answerDefaultA;
                }
                else if ([dic[@"dir"] isEqualToString:@"B"]) {
                    return answerDefaultB;
                }
                else if ([dic[@"dir"] isEqualToString:@"C"]) {
                    return answerDefaultC;
                }
                else {
                    return answerDefaultD;
                }
            }
        }
    }
}

-(CGFloat)getSpaceLabelHeight:(NSString *)str withWidh:(CGFloat)width
{
    
    CGSize size = CGSizeMake(width, MAXFLOAT);//设置高度宽度的最大限度
    CGRect rect  =[[NSString stringWithFormat:@"        %@",str] boundingRectWithSize:size options:NSStringDrawingUsesFontLeading|NSStringDrawingTruncatesLastVisibleLine|NSStringDrawingUsesLineFragmentOrigin attributes:@{NSFontAttributeName : [UIFont systemFontOfSize:16]} context:nil];
    return rect.size.height;
    
}

-(CGFloat)getSureLabelHeight:(NSString *)str withWidh:(CGFloat)width
{
    
    CGSize size = CGSizeMake(width, MAXFLOAT);//设置高度宽度的最大限度
    CGRect rect  =[[NSString stringWithFormat:@"%@",str] boundingRectWithSize:size options:NSStringDrawingUsesFontLeading|NSStringDrawingTruncatesLastVisibleLine|NSStringDrawingUsesLineFragmentOrigin attributes:@{NSFontAttributeName : [UIFont systemFontOfSize:13]} context:nil];
    return rect.size.height;
}


- (void)NextAction:(UIButton *)sender{
    if ([_dataSource[@"lastTime"] isEqualToString:@"1"] && [sender.titleLabel.text isEqualToString:@"提交"]) {
        self.NextPush();
    }else{
        if(self.NextT != 0){
            if (self.isSure) {
                self.isSure = NO;
                self.NextT = NextTypeDefault;
                self.NextPush();
            }else{
                
                [sender setTitle:@"下一题" forState:UIControlStateNormal];
                self.isSure = YES;
                self.NextT = 2;
                [self.bodyView reloadData];
            }
        }
        
    }

}


@end


