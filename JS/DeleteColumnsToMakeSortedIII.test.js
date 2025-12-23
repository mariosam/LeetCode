/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minDeletionSize } from './DeleteColumnsToMakeSortedIII.js'

TEST('Starting DeleteColumnsToMakeSortedIII test...', (t) => {
    //Test 1
    let want = 3
    let got = minDeletionSize(["babca","bbazb"])
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = minDeletionSize(["edcba"])
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = minDeletionSize(["ghi","def","abc"])
    t.assert( want === got, "Expect: "+want)

    t.end()
})
