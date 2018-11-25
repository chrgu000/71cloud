//
//  PartyBannerCollectionView.m
//  TheParty
//
//  Created by macmini on 2018/8/1.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "PartyBannerCollectionView.h"
#import "PartyBannerCollectionViewCell.h"
#define KCellSpace    55
#define KCellWidth    SCREEN_W - 55
#define KCellHeight   270
@interface PartyBannerCollectionView()<UICollectionViewDelegate, UICollectionViewDataSource,UICollectionViewDelegateFlowLayout,UIScrollViewDelegate>
{
    CGFloat _offer;
}
@property (nonatomic, strong) UICollectionViewFlowLayout *layout;
@property (nonatomic, strong) NSArray *dataAry;
@end

@implementation PartyBannerCollectionView

- (UICollectionViewFlowLayout *)layout {
    if (!_layout) {
        _layout = [[UICollectionViewFlowLayout alloc] init];
        _layout.itemSize =CGSizeMake(SCREEN_W - 50, 270);
    }
    return _layout;
}

- (instancetype)initWithFrame:(CGRect)frame withDataAry:(NSArray *)dataAry{
    if (self = [super initWithFrame:frame collectionViewLayout:self.layout]) {
        [self setLayout:self.layout];
        _dataAry = dataAry;
        if (_dataAry.count>2) {
            [self setContentOffset:CGPointMake(SCREEN_W-55, 200)];
        }
        self.bounces = NO;
        self.showsHorizontalScrollIndicator = NO;
        self.delegate = self;
        self.dataSource = self;
        self.backgroundColor= [UIColor clearColor];
        self.layout.scrollDirection = UICollectionViewScrollDirectionHorizontal;
        self.layout.minimumLineSpacing = 2;
        
        [self registerNib:[UINib nibWithNibName:@"PartyBannerCollectionViewCell" bundle:nil] forCellWithReuseIdentifier:@"PartyBannerCollectionViewCell"];
    }
    return self;
}
#pragma mark - UICollectionViewDataSource
- (NSInteger)collectionView:(UICollectionView *)collectionView numberOfItemsInSection:(NSInteger)section{
    return _dataAry.count;
}

- ( UICollectionViewCell *)collectionView:(UICollectionView *)collectionView cellForItemAtIndexPath:(NSIndexPath *)indexPath{
    PartyBannerCollectionViewCell *cell = [collectionView dequeueReusableCellWithReuseIdentifier:@"PartyBannerCollectionViewCell" forIndexPath:indexPath];
    [cell.imageV sd_setImageWithURL:[NSURL URLWithString:_dataAry[indexPath.row][@"thumb"]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
    cell.titleL.text = _dataAry[indexPath.row][@"name"];
    cell.deline.text = [NSString stringWithFormat:@"截止至%@",_dataAry[indexPath.row][@"last_time"]];
    
    NSMutableAttributedString *str = [[NSMutableAttributedString alloc] initWithString:[NSString stringWithFormat:@"已完成%@|剩余%@课时",_dataAry[indexPath.row][@"percent"],_dataAry[indexPath.row][@"residue"]]];
    NSRange range1 = [[str string] rangeOfString:[NSString stringWithFormat:@"%@",_dataAry[indexPath.row][@"percent"]]];
    [str addAttribute:NSForegroundColorAttributeName value:[UIColor redColor] range:range1];
    cell.classL.attributedText = str;
    cell.redView.frame =CGRectMake(10,217 , (SCREEN_W - 50)* [_dataAry[indexPath.row][@"percent"] integerValue]/100, 6);
    return cell;
}

#pragma mark - UICollectionViewDelegateFlowLayout
- (CGFloat)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout*)collectionViewLayout minimumLineSpacingForSectionAtIndex:(NSInteger)section{
    return 0.f;
}

- (CGFloat)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout*)collectionViewLayout minimumInteritemSpacingForSectionAtIndex:(NSInteger)section{
    return 0.f;
}

- (UIEdgeInsets)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout*)collectionViewLayout insetForSectionAtIndex:(NSInteger)section{
    return UIEdgeInsetsMake(0,0,0,0);
}

- (CGSize)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout*)collectionViewLayout sizeForItemAtIndexPath:(NSIndexPath *)indexPath{
    return CGSizeMake(KCellWidth, KCellHeight);
}

- (void)collectionView:(UICollectionView *)collectionView didSelectItemAtIndexPath:(NSIndexPath *)indexPath{
    if (self.Actiondelegate && [self.Actiondelegate respondsToSelector:@selector(PartyBannerSection:)]) {
        [self.Actiondelegate  PartyBannerSection:indexPath.row];
    }
}



- (void)scrollViewDidEndScrollingAnimation:(UIScrollView *)scrollView{
    _offer = scrollView.contentOffset.x;
}

- (void)scrollViewWillBeginDecelerating:(UIScrollView *)scrollView{
    
    if (fabs(scrollView.contentOffset.x -_offer) > 10) {
        
        if (scrollView.contentOffset.x > _offer) {
            
            int i = scrollView.contentOffset.x/([UIScreen mainScreen].bounds.size.width - KCellSpace/2)+1;
            
            NSIndexPath * index =  [NSIndexPath indexPathForRow:i inSection:0];
            
            [self scrollToItemAtIndexPath:index atScrollPosition:UICollectionViewScrollPositionCenteredHorizontally animated:YES];
            
        }else{
            
            int i = scrollView.contentOffset.x/([UIScreen mainScreen].bounds.size.width - KCellSpace/2)+1;
            
            NSIndexPath * index =  [NSIndexPath indexPathForRow:i-1 inSection:0];
            
            [self scrollToItemAtIndexPath:index atScrollPosition:UICollectionViewScrollPositionCenteredHorizontally animated:YES];
            
        }
        
    }
    
}

- (void)scrollViewWillEndDragging:(UIScrollView *)scrollView withVelocity:(CGPoint)velocity targetContentOffset:(inout CGPoint *)targetContentOffset{
    
    if (fabs(scrollView.contentOffset.x -_offer) > 20) {
        
        if (scrollView.contentOffset.x > _offer) {
            
            int i = scrollView.contentOffset.x/([UIScreen mainScreen].bounds.size.width - KCellSpace/2)+1;
            
            NSIndexPath * index =  [NSIndexPath indexPathForRow:i inSection:0];
            
            [self scrollToItemAtIndexPath:index atScrollPosition:UICollectionViewScrollPositionCenteredHorizontally animated:YES];
            
        }else{
            
            int i = scrollView.contentOffset.x/([UIScreen mainScreen].bounds.size.width - KCellSpace/2)+1;
            i = (i - 1)<0?0:(i - 1);
            NSIndexPath * index =  [NSIndexPath indexPathForRow:i inSection:0];
            [self scrollToItemAtIndexPath:index atScrollPosition:UICollectionViewScrollPositionCenteredHorizontally animated:YES];
            
        }
        
    }
    
}
@end
