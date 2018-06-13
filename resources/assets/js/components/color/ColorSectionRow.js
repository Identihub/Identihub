import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { DropTarget } from 'react-dnd';
import { connect } from 'react-redux';
import { bindActionCreators } from 'redux';
import Section from '../Section';
import ColorCard from './ColorCard';
import { dropTarget } from '../../helpers';
import { updateSectionOnColor, updateOrderOnColor } from '../../reducers/Extra/ExtraActions';
import { reorderElement, changeSection} from '../../reducers/Bridge/BridgeApiCalls';

class ColorSectionRow extends Component{

    constructor(props) {
        super(props);

        this.state = {
          colors: []
        };

        this.pushCard = this.pushCard.bind(this);
        this.removeCard = this.removeCard.bind(this);
        this.moveCard = this.moveCard.bind(this);
    }

    componentWillReceiveProps(nextProps) {
      this.updateLocalState(nextProps);
    }

    componentWillMount() {
      this.updateLocalState(this.props);
    }

    updateLocalState(props) {
        this.setState({
          colors: props.colors
        });
    }

    pushCard(card) {
        const {
            bridge,
            section,
            updateSectionOnColor,
            changeSection
        } = this.props;
        updateSectionOnColor(bridge.id, card.id, section.id);
        changeSection('color', card.id, section.id);
    }

    removeCard(index) { }

    moveCard(dragIndex, hoverIndex) {
        const {
            colors,
            bridge,
            section,
            updateOrderOnColor,
            reorderElement
        } = this.props;
        const card = colors.find( color => color.order === dragIndex && color.section_id === section.id);
        updateOrderOnColor(bridge.id, card.id, hoverIndex);
        reorderElement('color', card.id, hoverIndex);
    }

    render() {
        const {
            bridge,
            section,
            emptyStateText,
            colors,
            canDrop,
            isOver,
            connectDropTarget
        } = this.props;
        const isActive = canDrop && isOver;

        return connectDropTarget(
            <div>
                <Section
                         bridge={bridge}
                         section={section}
                         isActive={isActive}
                         emptyStateText={emptyStateText}>
                    {
                        colors.filter(color => ( color.section_id === section.id)).sort((a, b) => ( a.order - b.order )).map(color => {
                            return (
                              <ColorCard
                                  key={color.id}
                                  index={color.order}
                                  listId={color.section_id}
                                  card={color}
                                  removeCard={this.removeCard}
                                  moveCard={this.moveCard}
                                  bridge={bridge}
                              />
                            )
                        })
                    }
                </Section>
            </div>
        );
    }
}

ColorSectionRow.propTypes = {
    bridge: PropTypes.shape({
        id: PropTypes.integer
    }).isRequired,
    section: PropTypes.shape({
        id: PropTypes.number,
        order: PropTypes.number,
        title: PropTypes.string,
        description: PropTypes.string
    }).isRequired,
    colors: PropTypes.arrayOf(PropTypes.shape({
        id: PropTypes.number,
        section_id: PropTypes.number,
        order: PropTypes.number
    })).isRequired,
    emptyStateText: PropTypes.string.isRequired
};

const dispatchToProps = (dispatch) => {
  return bindActionCreators({
    updateOrderOnColor,
    updateSectionOnColor,
    reorderElement,
    changeSection
  }, dispatch)
};

const colorSectionRow = dropTarget("COLOR")(ColorSectionRow);

export default connect(state => state, dispatchToProps)(colorSectionRow);