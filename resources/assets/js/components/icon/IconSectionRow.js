import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {DropTarget} from 'react-dnd';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import Section from '../Section';
import IconCard from './IconCard';
import {dropTarget} from '../../helpers';
import {updateOrderOnIcon, updateSectionOnIcon} from '../../reducers/Extra/ExtraActions';
import {reorderElement, changeSection} from '../../reducers/Bridge/BridgeApiCalls';
import {SortableContainer, SortableElement, arrayMove} from 'react-sortable-hoc';

const IconsList = SortableContainer(({icons, section, bridge, removeCard, moveCard}) => {
    return (<div className="element-list">
        {
            icons.filter(icon => (icon.section_id === section.id)).sort((a, b) => (a.order - b.order)).map(icon => {
                return (
                    <IconCard
                        key={icon.id}
                        index={icon.order}
                        listId={icon.section_id}
                        card={icon}
                        bridge={bridge}
                        removeCard={removeCard}
                        moveCard={moveCard}/>
                )
            })
        }
    </div>)
});

class IconSectionRow extends Component {

    constructor(props) {
        super(props);

        this.pushCard = this.pushCard.bind(this);
        this.removeCard = this.removeCard.bind(this);
        this.moveCard = this.moveCard.bind(this);
    }

    state = {
        icons: []
    };

    componentWillReceiveProps(nextProps) {
        this.updateLocalState(nextProps);
    }

    componentWillMount() {
        this.updateLocalState(this.props);
    }

    updateLocalState(props) {
        this.setState({
            icons: props.icons
        });
    }

    pushCard(card) {
        const {
            bridge,
            section,
            updateSectionOnIcon,
            changeSection
        } = this.props;
        updateSectionOnIcon(bridge.id, card.id, section.id);
        changeSection('icon', card.id, section.id);
    }

    removeCard(index) {
    }

    moveCard(dragIndex, hoverIndex) {
        const {
            icons,
            bridge,
            section,
            updateOrderOnIcon,
            reorderElement
        } = this.props;
        const card = icons.find(icon => icon.order === dragIndex && icon.section_id === section.id);
        updateOrderOnIcon(bridge.id, card.id, hoverIndex);
        reorderElement('icon', card.id, hoverIndex);
    }

    onSortEnd = ({oldIndex, newIndex}) => {
        this.setState({
            icons: arrayMove(this.state.icons, oldIndex, newIndex),
        });
    };

    render() {
        const {
            bridge,
            section,
            emptyStateText,
            icons,
            canDrop,
            isOver,
        } = this.props;
        const isActive = canDrop && isOver;

        console.log(icons);

        return (<div>
            <Section
                bridge={bridge}
                section={section}
                isActive={isActive}
                emptyStateText={emptyStateText}>

                <IconsList icons={icons}
                           section={section}
                           bridge={bridge}
                           removeCard={this.removeCard}
                           moveCard={this.moveCard}
                           axis="x"
                           onSortEnd={this.onSortEnd}/>

            </Section>
        </div>);
    }
}

IconSectionRow.propTypes = {
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired,
    section: PropTypes.shape({
        id: PropTypes.number,
        order: PropTypes.number,
        title: PropTypes.string,
        description: PropTypes.string
    }).isRequired,
    icons: PropTypes.arrayOf(PropTypes.shape({
        id: PropTypes.number,
        section_id: PropTypes.number,
        order: PropTypes.number
    })).isRequired,
    emptyStateText: PropTypes.string.isRequired
};

const dispatchToProps = (dispatch) => {
    return bindActionCreators({
        updateOrderOnIcon,
        updateSectionOnIcon,
        reorderElement,
        changeSection
    }, dispatch)
};

// const iconSectionRow = dropTarget("ICON")(IconSectionRow);

export default connect(state => state, dispatchToProps)(IconSectionRow);