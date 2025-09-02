/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} classes
 * @param {number} extraStudents
 * @return {number}
 */
function maxAverageRatio(classes, extraStudents) {
    const pq = new MaxHeap();

    // Populate the max heap
    for (const [pass, total] of classes) {
        pq.push([pass, total]);
    }

    // Distribute extra students
    while (extraStudents > 0) {
        const [pass, total] = pq.pop();
        pq.push([pass + 1, total + 1]);
        extraStudents--;
    }

    // Calculate average pass ratio
    let sum = 0.0;
    const count = pq.size();
    while (pq.size() > 0) {
        const [pass, total] = pq.pop();
        sum += pass / total;
    }

    return sum / count;
}

class MaxHeap {
    constructor() {
        this.heap = [];
    }

    // Calculate difference in pass ratio
    getDiff(pass, total) {
        return (pass + 1) / (total + 1) - pass / total;
    }

    // Push item with priority
    push(item) {
        this.heap.push(item);
        this._siftUp(this.heap.length - 1);
    }

    // Pop item with highest priority
    pop() {
        if (this.heap.length === 0) return null;
        if (this.heap.length === 1) return this.heap.pop();
        const root = this.heap[0];
        this.heap[0] = this.heap.pop();
        this._siftDown(0);
        return root;
    }

    // Sift up to maintain max heap property
    _siftUp(index) {
        const parentIndex = Math.floor((index - 1) / 2);
        if (parentIndex >= 0 && this._compare(index, parentIndex) > 0) {
            [this.heap[index], this.heap[parentIndex]] = [this.heap[parentIndex], this.heap[index]];
            this._siftUp(parentIndex);
        }
    }

    // Sift down to maintain max heap property
    _siftDown(index) {
        const left = 2 * index + 1;
        const right = 2 * index + 2;
        let largest = index;

        if (left < this.heap.length && this._compare(left, largest) > 0) {
            largest = left;
        }
        if (right < this.heap.length && this._compare(right, largest) > 0) {
            largest = right;
        }
        if (largest !== index) {
            [this.heap[index], this.heap[largest]] = [this.heap[largest], this.heap[index]];
            this._siftDown(largest);
        }
    }

    // Compare based on priority
    _compare(i, j) {
        const [passI, totalI] = this.heap[i];
        const [passJ, totalJ] = this.heap[j];
        return this.getDiff(passI, totalI) - this.getDiff(passJ, totalJ);
    }

    size() {
        return this.heap.length;
    }
}
export { maxAverageRatio }
