/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} nums
 * @param {number} k
 * @return {number}
 */
function minOperations(nums, k) {
    let pq = new MinHeap();
    nums.forEach(num => pq.push(num));

    let ops = 0;
    while (pq.size() > 1 && pq.peek() < k) {
        let x = pq.pop();
        let y = pq.pop();
        pq.push(x * 2 + y);
        ops++;
    }
    return ops;
}

class MinHeap {
    constructor() {
        this.data = [];
    }

    push(val) {
        this.data.push(val);
        this._heapifyUp();
    }

    pop() {
        if (this.size() === 1) return this.data.pop();
        const min = this.data[0];
        this.data[0] = this.data.pop();
        this._heapifyDown();
        return min;
    }

    peek() {
        return this.data[0];
    }

    size() {
        return this.data.length;
    }

    _heapifyUp() {
        let index = this.size() - 1;
        while (index > 0) {
            let parentIndex = Math.floor((index - 1) / 2);
            if (this.data[parentIndex] <= this.data[index]) break;
            [this.data[parentIndex], this.data[index]] = [this.data[index], this.data[parentIndex]];
            index = parentIndex;
        }
    }

    _heapifyDown() {
        let index = 0;
        const length = this.size();
        while (true) {
            let leftChild = 2 * index + 1;
            let rightChild = 2 * index + 2;
            let smallest = index;

            if (leftChild < length && this.data[leftChild] < this.data[smallest]) {
                smallest = leftChild;
            }
            if (rightChild < length && this.data[rightChild] < this.data[smallest]) {
                smallest = rightChild;
            }
            if (smallest === index) break;
            [this.data[index], this.data[smallest]] = [this.data[smallest], this.data[index]];
            index = smallest;
        }
    }
}
export { minOperations }
