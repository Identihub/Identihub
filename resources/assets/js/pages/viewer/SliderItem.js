import React, {Component} from 'react';

class SliderItem extends Component {
    render() {
        const {index, ...props} = this.props;
        return (
            <div className="slider-item" {...props}>
                <h3>{index}</h3>
            </div>
        );
    }
}

export default SliderItem;